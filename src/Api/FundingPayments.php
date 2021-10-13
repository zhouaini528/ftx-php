<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class FundingPayments extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /funding_payments
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/funding_payments';
        $this->data=$data;
        return $this->exec();
    }
}
