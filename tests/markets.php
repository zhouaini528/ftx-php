<?php
use Lin\Ftx\Ftx;


require __DIR__ .'../../vendor/autoload.php';

include 'key_secret.php';

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


