<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Markets extends Request
{
    //authenticat requests signature
    protected $authorization=false;

    /**
     *GET /markets
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/markets';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_name}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_name'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_name}/orderbook?depth={depth}
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_name'].'/orderbook';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_name}/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_name'].'/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_name}/candles?resolution={resolution}&start_time={start_time}&end_time={end_time}
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_name'].'/candles?resolution='.$data['resolution'];
        $this->data=$data;
        return $this->exec();
    }
}
