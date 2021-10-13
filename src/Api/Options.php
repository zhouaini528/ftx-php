<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Options extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /options/requests
     * */
    public function getRequests(array $data=[]){
        $this->authorization=false;
        $this->type='GET';
        $this->path='/options/requests';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/my_requests
     * */
    public function getMyRequests(array $data=[]){
        $this->type='GET';
        $this->path='/options/my_requests';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /options/requests
     * */
    public function postRequests(array $data=[]){
        $this->type='POST';
        $this->path='/options/requests';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /options/requests/{request_id}
     * */
    public function deleteRequests(array $data=[]){
        $this->type='DELETE';
        $this->path='/options/requests/'.$data['request_id'];
        unset($data['request_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /options/requests/{request_id}/quotes
     * */
    public function getRequestsQuotes(array $data=[]){
        $this->type='GET';
        $this->path='/options/requests/'.$data['request_id'].'/quotes';
        unset($data['request_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST  /options/requests/{request_id}/quotes
     * */
    public function postRequestsQuotes(array $data=[]){
        $this->type='POST';
        $this->path='/options/requests/'.$data['request_id'].'/quotes';
        unset($data['request_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/my_quotes
     * */
    public function getMyQuotes(array $data=[]){
        $this->type='GET';
        $this->path='/options/my_quotes';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /options/quotes/<quote_id>
     * */
    public function deleteQuotes(array $data=[]){
        $this->type='DELETE';
        $this->path='/options/quotes/'.$data['quote_id'];
        unset($data['quote_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /options/quotes/<quote_id>/accept
     * */
    public function postQuotesAccept(array $data=[]){
        $this->type='POST';
        $this->path='/options/quotes/'.$data['quote_id'].'/accept';
        unset($data['quote_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET GET /options/account_info
     * */
    public function getAccountInfo(array $data=[]){
        $this->type='GET';
        $this->path='/options/account_info';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/positions
     * */
    public function getPositions(array $data=[]){
        $this->type='GET';
        $this->path='/options/positions';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/options/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/options/fills';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /stats/24h_options_volume
     * */
    public function get24hOptionsVolume(array $data=[]){
        $this->type='GET';
        $this->path='/stats/24h_options_volume';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/historical_volumes/BTC
     * */
    public function getHistoricalVolumes(array $data=[]){
        $this->type='GET';
        $this->path='/options/historical_volumes/'.($data['market_name'] ?? 'BTC');
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /options/open_interest/BTC
     * */
    public function getOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/options/open_interest/'.($data['market_name'] ?? 'BTC');
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET options/historical_open_interest/BTC
     * */
    public function getHistoricalOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/options/historical_open_interest/'.($data['market_name'] ?? 'BTC');
        $this->data=$data;
        return $this->exec();
    }

}
