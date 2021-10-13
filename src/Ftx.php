<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx;


use Lin\Ftx\Api\Account;
use Lin\Ftx\Api\Convert;
use Lin\Ftx\Api\Fills;
use Lin\Ftx\Api\FundingPayments;
use Lin\Ftx\Api\Futures;
use Lin\Ftx\Api\LatencyStatistics;
use Lin\Ftx\Api\LeveragedTokens;
use Lin\Ftx\Api\Markets;
use Lin\Ftx\Api\Nfts;
use Lin\Ftx\Api\Options;
use Lin\Ftx\Api\Orders;
use Lin\Ftx\Api\SpotMargin;
use Lin\Ftx\Api\Staking;
use Lin\Ftx\Api\Subaccounts;
use Lin\Ftx\Api\SupportTickets;
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
    function convert(array $options=[]){
        return new Convert($this->init());
    }

    /**
     *
     * */
    function fills(array $options=[]){
        return new Fills($this->init());
    }

    /**
     *
     * */
    function fundingPayments(array $options=[]){
        return new FundingPayments($this->init());
    }

    /**
     *
     * */
    function futures(array $options=[]){
        return new Futures($this->init());
    }

    /**
     *
     * */
    function latencyStatistics(array $options=[]){
        return new LatencyStatistics($this->init());
    }

    /**
     *
     * */
    function leveragedTokens(array $options=[]){
        return new LeveragedTokens($this->init());
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
    function nfts(array $options=[]){
        return new Nfts($this->init());
    }

    /**
     *
     * */
    function options(array $options=[]){
        return new Options($this->init());
    }

    /**
     *
     * */
    function orders(array $options=[]){
        return new Orders($this->init());
    }

    /**
     *
     * */
    function spotMargin(array $options=[]){
        return new SpotMargin($this->init());
    }

    /**
     *
     * */
    function staking(array $options=[]){
        return new Staking($this->init());
    }

    /**
     *
     * */
    function subaccounts(array $options=[]){
        return new Subaccounts($this->init());
    }

    /**
     *
     * */
    function supportTickets(array $options=[]){
        return new SupportTickets($this->init());
    }

    /**
     *
     * */
    function wallet(array $options=[]){
        return new Wallet($this->init());
    }


}
