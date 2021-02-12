<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

class TransbankController extends Controller
{
    public function initTransaction($monto, $order, $idSession){
		$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

		$amount = $monto; // Monto total a Pagar
		$sessionId = $idSession; // Identificador que será retornado en el callback de resultado
		$buyOrder = $order; // Identificador único de orden de compra
		$returnUrl = route('checkout.webpay.response'); // URL que resivira la respuesta
		$finalUrl = route('checkout.webpay.finish'); // URL a la cual se le redireccionara el usuario al final

		$initResult = $transaction->initTransaction(
		        $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);
		
		$formAction = $initResult->url;
		$tokenWs = $initResult->token;

		return ['token' => $tokenWs, 'url' => $formAction];
	}

	public function response(){  
		$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
		->getNormalTransaction();

		$token = filter_input(INPUT_POST, 'token_ws');
		$result = $transaction->getTransactionResult($token);
		$output = $result->detailOutput;
		$url = $result->urlRedirection;
		if ($output->responseCode == 0) {
			return view('Componentes.TransbackResponse', compact('token', 'url'));
		}else{

		}
	}

	public function finish()  
	{
        
	}
}
