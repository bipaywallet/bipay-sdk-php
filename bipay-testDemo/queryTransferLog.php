<?php
    // 查询转账记录
    include '../bipay-core/Bipay.php';

    $bipay = new Bipay();
    $timestamp = time();
    $nonce = 123456;
    $key = 'c42a6ed6823d431135cc35f67dd5eb53';
    $body = '{}';
    $sign = md5($body . $key . $nonce . $timestamp);
    $res = $bipay->queryTransferLog($timestamp, $nonce, $sign, $body);
    echo $res;