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




