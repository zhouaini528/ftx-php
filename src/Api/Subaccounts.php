<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Subaccounts extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /subaccounts
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/subaccounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /subaccounts
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/subaccounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /subaccounts/update_name
     * */
    public function postUpdateName(array $data=[]){
        $this->type='POST';
        $this->path='/subaccounts/update_name';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /subaccounts
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/subaccounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /subaccounts/{nickname}/balances
     * */
    public function getBalances(array $data=[]){
        $this->type='GET';
        $this->path='/subaccounts/'.$data['nickname'].'/balances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /subaccounts/transfer
     * */
    public function postTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/subaccounts/transfer';
        $this->data=$data;
        return $this->exec();
    }
}
