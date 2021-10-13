<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class SpotMargin extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /*GET /spot_margin/history
    GET /spot_margin/borrow_rates
    GET /spot_margin/lending_rates
    GET /spot_margin/borrow_summary
    GET /spot_margin/market_info?market={market}
    GET /spot_margin/borrow_history
    GET /spot_margin/lending_history
    GET /spot_margin/offers
    GET /spot_margin/lending_info
    POST /spot_margin/offers*/

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
