<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaccion;
use Illuminate\Http\Request;
use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

class TransbankController extends Controller
{
    
	public function initTransaction($monto, $order, $idTrans){
		$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

		$amount = $monto; // Monto total a Pagar
		$buyOrder = $order; // Identificador único de orden de compra

		$pago = Transaccion::where('id', $idTrans)->first();
		$pago->monto = $amount;
		$pago->order = $order;

		if($pago->save()){
			$sessionId = strval($pago->id);//$idSession; // Identificador que será retornado en el callback de resultado
		
			$returnUrl = route('checkout.webpay.response'); // URL que resivira la respuesta
			$finalUrl = route('checkout.webpay.finish'); // URL a la cual se le redireccionara el usuario al final

			$initResult = $transaction->initTransaction(
			        $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);
			
			$formAction = $initResult->url;
			$tokenWs = $initResult->token;

			$pago->token = $tokenWs;
			$pago->estado = 'Procesando';
			if($pago->save()){
				return ['status' => 0, 'token' => $tokenWs, 'url' => $formAction];
			}else{
				return ['status' => 1];
			}
		}else{
			return ['status' => 1];
		}		
	}

	public function response(){  
		$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
		->getNormalTransaction();

		$token = filter_input(INPUT_POST, 'token_ws');
		$result = $transaction->getTransactionResult($token);
		$card = $result->cardDetail;
		$output = $result->detailOutput;
		$url = $result->urlRedirection;
		if ($output->responseCode == 0) {
			
			$pago = Transaccion::where('id', $result->sessionId)->first();
			
			$pago->VCI = $result->VCI;
			$pago->transactionDate = $result->transactionDate;
			$pago->accountingDate = $result->accountingDate;

			$pago->cardNumber = $card->cardNumber;
			$pago->cardExpirationDate = $card->cardExpirationDate;

			$pago->authorizationCode = $output->authorizationCode;
			$pago->paymentTypeCode = $output->paymentTypeCode;
			$pago->commerceCode = $output->commerceCode;
			$pago->estado = 'Aporbado';

			$pago->save();
			
		}else{
			$pago = Transaccion::where('id', $result->sessionId)->first();
			$pago->estado = 'Rechazado';
			$pago->save();

		}

		return view('transbank.response', compact('token', 'url'));

	}

	public function finish(){
        return Transaccion::last()->first();
	}
}
