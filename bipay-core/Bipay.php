<?php

class Bipay {

    const URL = 'http://36.7.147.3:45043'; //请求域名
    const CREATE_ADDRESS_URL = '/mch/address/create'; //根商户向下产生地址
    const TRANSFER_URL = '/mch/withdraw'; //商户发起转账申请
    const QUERY_URL = '/mch/transaction'; //查询账单总记录及详细记录

    public function __construct() {
        include 'function.php';
    }

    /**
     * 根商户向下产生地址
     * @author zhoukang <2808907382@qq.com>
     * @return array
     */
    public function createAddress($timestamp = '', $nonce = '', $sign = '', $body = '') {
        $param = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $url = self::URL . self::CREATE_ADDRESS_URL;
        return HttpPost($url, json_encode($param));
    }

    /**
     * 转账申请
     * @author zhoukang <2808907382@qq.com>
     * @return array
     */
    public function transfer($timestamp = '', $nonce = '', $sign = '', $body = '') {
        $param = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $url = self::URL . self::TRANSFER_URL;
        return HttpPost($url, json_encode($param));
    }

    /**
     * 查询转账记录
     * @author zhoukang <2808907382@qq.com>
     * @return array
     */
    public function queryTransferLog($timestamp = '', $nonce = '', $sign = '', $body = '') {
        $param = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $url = self::URL . self::QUERY_URL;
        return HttpPost($url, json_encode($param));
    }

}
