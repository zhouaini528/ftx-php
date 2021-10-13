### It is recommended that you read the official document first

FTX 文档 [https://docs.ftx.com/](https://docs.ftx.com/)

所有接口方法的初始化都与FTX提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/ftx-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/ftx-php/blob/master/README.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)

[Bigone](https://github.com/zhouaini528/bigone-php)

[Crex24](https://github.com/zhouaini528/crex24-php)

[Bybit](https://github.com/zhouaini528/bybit-php)

[Coinbene](https://github.com/zhouaini528/coinbene-php)

[Bitget](https://github.com/zhouaini528/bitget-php)

[Poloniex](https://github.com/zhouaini528/poloniex-php)

[Coinex](https://github.com/zhouaini528/coinex-php)

[FTX](https://github.com/zhouaini528/ftx-php)

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

#### Installation
```
composer require linwj/ftx
```

支持更多请求设置
```php
//spot
use Lin\Ftx\Ftx;
$ftx=new Ftx();
//or
$ftx=new Ftx($key,$secret);

//You can set special needs
$ftx->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //https://github.com/guzzle/guzzle
    //'proxy'=>[],

    //https://www.php.net/manual/en/book.curl.php
    //'curl'=>[],

    //FTX-SUBACCOUNT (optional): 子账号ID,选填
    //'headers'=>['FTX-SUBACCOUNT'=>'xxxx']
]);
```

### 交易所

市场 API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Markets.php)

```php
$ftx=new Ftx();

try {
    $result=$ftx->markets()->gets();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->markets()->get([
        'market_name'=>'BTC/USD',// BTC/USD   BTC-PERP  BTC-0626
        //'depth'=>'10'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->markets()->getOrderBook([
        'market_name'=>'BTC-PERP',// BTC/USD   BTC-PERP  BTC-0626
        //'depth'=>'10'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->markets()->getTrades([
        'market_name'=>'BTC-0626',// BTC/USD   BTC-PERP  BTC-0626
        //'depth'=>'10'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->markets()->getCandles([
        'market_name'=>'BTC-0628',// BTC/USD   BTC-PERP  BTC-0626
        'resolution'=>'60'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

账户 API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Account.php)

```php
$ftx=new Ftx($key,$secret);

try {
    $result=$ftx->account()->get();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


try {
    $result=$ftx->account()->getPositions();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```


订单 API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Orders.php)

```php
$ftx=new Ftx($key,$secret);

try {
    $result=$ftx->orders()->post([
        'market'=>'BTC/USD',
        'side'=>'buy',
        'price'=>'10000',
        'type'=>'limit',
        'size'=>'1',
        //'clientId'=>'1234567890',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->orders()->get([
        'order_id'=>'1234567890',
    ]);
    print_r($result);

    $result=$ftx->orders()->getByClientId([
        'client_order_id'=>'1234567890',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


try {
    $result=$ftx->orders()->delete([
        'order_id'=>'1234567890',
    ]);
    print_r($result);

    $result=$ftx->orders()->deleteByClientId([
        'client_order_id'=>'1234567890',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

更多用例 [more](https://github.com/zhouaini528/ftx-php/tree/master/tests)
