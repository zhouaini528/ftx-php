<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Futures extends Request
{
    //authenticat requests signature
    protected $authorization=false;

    /**
     *GET /futures
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/futures';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /futures/{future_name}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/futures/'.$data['future_name'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /futures/{future_name}/stats
     * */
    public function getStats(array $data=[]){
        $this->type='GET';
        $this->path='/futures/'.$data['future_name'].'/stats';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /funding_rates
     * */
    public function getFundingRates(array $data=[]){
        $this->type='GET';
        $this->path='/funding_rates';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /indexes/{index_name}/weights
     * */
    public function getIndexesWeights(array $data=[]){
        $this->type='GET';
        $this->path='/indexes/'.$data['index_name'].'/weights';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /expired_futures
     * */
    public function getExpiredFutures(array $data=[]){
        $this->type='GET';
        $this->path='/expired_futures';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET GET /indexes/{market_name}/candles?resolution={resolution}&start_time={start_time}&end_time={end_time}
     * */
    public function getIndexesCandles(array $data=[]){
        $this->type='GET';
        $this->path='/indexes/'.$data['market_name'].'/candles?resolution='.$data['resolution'];
        $this->data=$data;
        return $this->exec();
    }
}
