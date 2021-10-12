### It is recommended that you read the official document first

FTX docs [https://docs.ftx.com/](https://docs.ftx.com/)

All interface methods are initialized the same as those provided by FTX. See details [src/api](https://github.com/zhouaini528/ftx-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/ftx-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

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

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/ftx
```

Support for more request Settings
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

    //FTX-SUBACCOUNT (optional): URI-encoded name of the subaccount to use. Omit if not using subaccounts.
    //'headers'=>['FTX-SUBACCOUNT'=>'xxxx']
]);
```

### Exchange

Market API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Markets.php)

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

Account API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Account.php)

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


Orders API [More](https://github.com/zhouaini528/ftx-php/tree/master/src/Api/Orders.php)

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

More Test [more](https://github.com/zhouaini528/ftx-php/tree/master/tests)



