<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class LatencyStatistics extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    //GET /stats/latency_stats?days={days}&subaccount_nickname={subaccount_nickname}

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
