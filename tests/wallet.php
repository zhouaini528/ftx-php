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
    $result=$ftx->wallet()->getBalances();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$ftx->wallet()->getAllBalances();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

