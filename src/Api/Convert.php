<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Convert extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /*POST /otc/quotes
    GET /otc/quotes/{quoteId}
    POST /otc/quotes/{quote_id}/accept*/

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
