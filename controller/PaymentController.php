<?php
    require_once '../lib/vendor/autoload.php';
   
    
    /* $token = $_REQUEST["token"];
    $payment_method_id = $_REQUEST["payment_method_id"];
    $installments = $_REQUEST["installments"];
    $issuer_id = $_REQUEST["issuer_id"];
    */

    /*
    MercadoPagoSDK::setAccessToken("YOUR_ACCESS_TOKEN");
    $contents = json_decode(file_get_contents('php://input'), true);
  
    $payment = new MercadoPagoPayment();
    $payment->transaction_amount = $contents['transaction_amount'];
    $payment->token = $contents['token'];
    $payment->installments = $contents['installments'];
    $payment->payment_method_id = $contents['payment_method_id'];
    $payment->issuer_id = $contents['issuer_id'];
    $payer = new MercadoPagoPayer();
    $payer->email = $contents['payer']['email'];
    $payer->identification = array(
      "type" => $contents['payer']['identification']['type'],
      "number" => $contents['payer']['identification']['number']
    );
    $payment->payer = $payer;
    $payment->save();
    $response = array(
      'status' => $payment->status,
      'status_detail' => $payment->status_detail,
      'id' => $payment->id
    );
    echo json_encode($response);
 