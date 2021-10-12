<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx;


use Lin\Ftx\Api\Account;
use Lin\Ftx\Api\Markets;
use Lin\Ftx\Api\Wallet;

class Ftx
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://ftx.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'perpetual',
            'version'=>'v1',
        ];

    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function account(array $options=[]){
        return new Account($this->init());
    }

    /**
     *
     * */
    function markets(array $options=[]){
        return new Markets($this->init());
    }

    /**
     *
     * */
    function wallet(array $options=[]){
        return new Wallet($this->init());
    }
}
