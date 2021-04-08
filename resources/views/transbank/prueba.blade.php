<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form id="myForm" action="@if(isset($pago['url'])){{$pago['url']}}@endif" method="POST" class="col-span-6">
        <input type="hidden" name="token_ws" id="token_ws"
            value="@if(isset($pago['token'])){{$pago['token']}}@endif">

    </form>
    <script type="text/javascript">

        function formAutoSubmit () {
        
        var frm = document.getElementById("myForm");
        
        frm.submit();
        
        }
        
        window.onload = formAutoSubmit;
        
        </script>
</body>
</html>