<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Fills extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /fills?market={market}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/fills';
        $this->data=$data;
        return $this->exec();
    }
}
