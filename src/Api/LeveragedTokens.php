<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class LeveragedTokens extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /lt/tokens
     * */
    public function gets(array $data=[]){
        $this->authorization=false;
        $this->type='GET';
        $this->path='/lt/tokens';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /lt/{token_name}
     * */
    public function get(array $data=[]){
        $this->authorization=false;
        $this->type='GET';
        $this->path='/lt/'.$data['token_name'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /lt/balances
     * */
    public function getBalances(array $data=[]){
        $this->type='GET';
        $this->path='/lt/balances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /lt/creations
     * */
    public function getCreations(array $data=[]){
        $this->type='GET';
        $this->path='/lt/creations';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /lt/{token_name}/create
     * */
    public function postCreate(array $data=[]){
        $this->type='POST';
        $this->path='/lt/'.$data['token_name'].'/create';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /lt/redemptions
     * */
    public function getRedemptions(array $data=[]){
        $this->type='GET';
        $this->path='/lt/redemptions';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /lt/{token_name}/redeem
     * */
    public function postRedeem(array $data=[]){
        $this->type='POST';
        $this->path='/lt/'.$data['token_name'].'/redeem';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /etfs/rebalance_info
     * */
    public function getEtfsRebalanceInfo(array $data=[]){
        $this->type='GET';
        $this->path='/etfs/rebalance_info';
        $this->data=$data;
        return $this->exec();
    }
}
