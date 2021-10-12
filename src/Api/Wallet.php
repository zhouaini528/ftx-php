<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Wallet extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /wallet/coins
     * */
    public function getCoins(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/coins';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/balances
     * */
    public function getBalances(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/balances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/all_balances
     * */
    public function getAllBalances(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/all_balances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/deposit_address/{coin}?method={method}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/deposit_address/'.$data['coin'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /wallet/deposit_address/list
     * */
    public function postDepositAddressList(array $data=[]){
        $this->type='POST';
        $this->path='/wallet/deposit_address/list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/deposits
     * */
    public function getDeposits(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/deposits';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/withdrawals
     * */
    public function getWithdrawals(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /wallet/withdrawals
     * */
    public function postWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/wallet/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/airdrops
     * */
    public function getAirdrops(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/airdrops';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/with
     * */
    public function getWith(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/with';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /wallet/saved_addresses
     * */
    public function getSavedAddresses(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/saved_addresses';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /wallet/saved_addresses
     * */
    public function postSavedAddresses(array $data=[]){
        $this->type='POST';
        $this->path='/wallet/saved_addresses';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /wallet/saved_addresses/{saved_address_id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/wallet/saved_addresses/'.$data['saved_address_id'];
        $this->data=$data;
        return $this->exec();
    }
}
