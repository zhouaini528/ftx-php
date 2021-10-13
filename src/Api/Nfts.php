<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Nfts extends Request
{
    //authenticat requests signature
    protected $authorization=true;


    /*GET /nfts
    GET /nft/{nft_id}
    GET /nft/{nft_id}/trades
    GET /all_trades
    GET /nft/{nft_id}/account_info
    GET /collections
    GET /balances
    POST /offer
    POST /buy
    POST /auction
    POST /edit_auction
    POST /cancel_auction
    GET /bids
    POST /bids
    GET /deposits
    GET /withdrawals
    GET /fills
    POST /redeem
    GET /gallery/{gallery_id}
    GET /gallery_settings
    POST /gallery_settings*/

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
