# Bipay -- 币付商户接口调用PHPsdk
 本程序是一个简单的调用"币付"商户接口示例Demo
 
# 查询转账记录
```
    include '../bipay-core/Bipay.php';
    $bipay = new Bipay();
    $timestamp = time();
    $nonce = 123456;
    $key = 'c42a6ed6823d431135cc35f67dd5eb53';
    $body = '{}';
    $sign = md5($body . $key . $nonce . $timestamp);
    $res = $bipay->queryTransferLog($timestamp, $nonce, $sign, $body);
    echo $res;
```

# 返回结果示例
```
{
	"data":[
		{"coinType":"0x9e7d29bd499b6c7da2a5b2eafcf4a39d3bd845d1","mchid":"100135","fee":"426616000000000","txid":"0x58b6c361e75c1e01f0d9d850bfa0a0c7655b5354488c55544e15c4054daa516a","updateTime":1542113631000,"tradeAmount":"120000000000000000","mainCoinType":"60","createTime":1542113631000,"tradeStatus":1,"tradeAddress":"0xbbfde3d2797e54a00281a0fe922f307f7a2e3ad0","tradeId":"20181113205350517","tradeType":1},
		{"coinType":"0x9e7d29bd499b6c7da2a5b2eafcf4a39d3bd845d1","mchid":"100135","fee":"426616000000000","txid":"0x58b6c361e75c1e01f0d9d850bfa0a0c7655b5354488c55544e15c4054daa516a","updateTime":1542113768000,"tradeAmount":"120000000000000000","mainCoinType":"60","createTime":1542113768000,"tradeStatus":1,"tradeAddress":"0xbbfde3d2797e54a00281a0fe922f307f7a2e3ad0","tradeId":"20181113205350517","tradeType":1},
		{"coinType":"0x9e7d29bd499b6c7da2a5b2eafcf4a39d3bd845d1","mchid":"100135","fee":"306616000000000","txid":"0x0651065a4aac437b6a868a45463453781fcb326003bb5285465a0532b3fb2255","updateTime":1542114008000,"tradeAmount":"900000000000000000","mainCoinType":"60","createTime":1542114008000,"tradeStatus":1,"tradeAddress":"0xbbfde3d2797e54a00281a0fe922f307f7a2e3ad0","tradeId":"20181113210007436","tradeType":1},
		{"coinType":"0x9e7d29bd499b6c7da2a5b2eafcf4a39d3bd845d1","mchid":"100135","fee":"306616000000000","txid":"0x0651065a4aac437b6a868a45463453781fcb326003bb5285465a0532b3fb2255","updateTime":1542114009000,"tradeAmount":"900000000000000000","mainCoinType":"60","createTime":1542114009000,"tradeStatus":1,"tradeAddress":"0xbbfde3d2797e54a00281a0fe922f307f7a2e3ad0","tradeId":"20181113210007436","tradeType":1},
	],
	"message":"SUCCESS",
	"code":200
}
```

了解更多币付详细内容，移步到：

[币付官方网站](http://app.bipay.io/)
