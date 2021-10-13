<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Staking extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /*GET /staking/stakes
    GET /staking/unstake_requests
    GET /staking/balances
    POST /staking/unstake_requests
    DELETE /staking/unstake_requests/{request_id}
    GET /staking/staking_rewards
    POST /srm_stakes/stakes*/

    /**
     *
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }

}
