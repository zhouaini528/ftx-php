<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Account extends Request
{
    //authenticat requests signature
    protected $authorization=true;


    /**
     *GET /account
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/account';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /positions
     * */
    public function getPositions(array $data=[]){
        $this->type='GET';
        $this->path='/positions';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /account/leverage
     * */
    public function postLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/account/leverage';
        $this->data=$data;
        return $this->exec();
    }
}
