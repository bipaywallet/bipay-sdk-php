<?php
    // 转账申请调用示例
    include '../bipay-core/Bipay.php';

    $bipay = new Bipay();
    $timestamp = time();
    $nonce = 123456;
    $key = 'c42a6ed6823d431135cc35f67dd5eb53';
    $body = array(
        'merchantId' => 100135,
        'coinType' => 0,
        'mainCoinType' => 0,
        'address' => '1gFP2h777cSqAREQQYWnCznUxCCBxUaqA',
        'amount' => 1.11,
        'callUrl' => 'http://192.168.0.1:8081/merchant/call-back'
    );
    $body = '['.json_encode($body).']';
    $sign = md5($body . $key . $nonce . $timestamp);
    $res = $bipay->transfer($timestamp, $nonce, $sign, $body);
    echo $res;