<?php
    // 生成地址调用示例
    include '../bipay-core/Bipay.php';
    
    $bipay = new Bipay();
    $timestamp = time();
    $nonce = 123456;
    $key = 'c42a6ed6823d431135cc35f67dd5eb53';
    $body = array(
        'merchantId' => 100135,
        'coinType' => 0,
        'callUrl' => 'http://192.168.0.1:8081/merchant/call-back'
    );
    $body = '['.json_encode($body).']';
    $sign = md5($body . $key . $nonce . $timestamp);
    $res = $bipay->createAddress($timestamp, $nonce, $sign, $body);
    echo $res;