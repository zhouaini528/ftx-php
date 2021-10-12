<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class Orders extends Request
{
    //authenticat requests signature
    protected $authorization=true;

    /**
     *GET /orders?market={market}
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /orders/history?market={market}
     * */
    public function getHistory(array $data=[]){
        $this->type='GET';
        $this->path='/orders/history';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /conditional_orders?market={market}
     * */
    public function getConditionalOrders(array $data=[]){
        $this->type='GET';
        $this->path='/conditional_orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /conditional_orders/{conditional_order_id}/triggers
     * */
    public function getConditionalOrderId(array $data=[]){
        $this->type='GET';
        $this->path='/conditional_orders/'.$data['conditional_order_id'].'/triggers';
        unset($data['conditional_order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /conditional_orders/history?market={market}
     * */
    public function getConditionalOrdersHistory(array $data=[]){
        $this->type='GET';
        $this->path='/conditional_orders/history';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /orders
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /conditional_orders
     * */
    public function postConditionalOrders(array $data=[]){
        $this->type='POST';
        $this->path='/conditional_orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /orders/{order_id}/modify
     * */
    public function postModify(array $data=[]){
        $this->type='POST';
        $this->path='/orders/'.$data['order_id'].'/modify';
        unset($data['order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /orders/by_client_id/{client_order_id}/modify
     * */
    public function postByClientIdModify(array $data=[]){
        $this->type='POST';
        $this->path='/orders/by_client_id/'.$data['client_order_id'].'/modify';
        unset($data['client_order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /conditional_orders/{order_id}/modify
     * */
    public function postConditionalOrdersModify(array $data=[]){
        $this->type='POST';
        $this->path='/conditional_orders/'.$data['order_id'].'/modify';
        unset($data['order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /orders/{order_id}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/orders/'.$data['order_id'];
        unset($data['order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /orders/by_client_id/{client_order_id}
     * */
    public function getByClientId(array $data=[]){
        $this->type='GET';
        $this->path='/orders/by_client_id/'.$data['client_order_id'];
        unset($data['client_order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /orders/{order_id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/orders/'.$data['order_id'];
        unset($data['order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /orders/by_client_id/{client_order_id}
     * */
    public function deleteByClientId(array $data=[]){
        $this->type='DELETE';
        $this->path='/orders/by_client_id/'.$data['client_order_id'];
        unset($data['client_order_id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /conditional_orders/{id}
     * */
    public function deleteConditionalOrders(array $data=[]){
        $this->type='DELETE';
        $this->path='/conditional_orders/'.$data['id'];
        unset($data['id']);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /orders
     * */
    public function deletes(array $data=[]){
        $this->type='DELETE';
        $this->path='/orders';
        $this->data=$data;
        return $this->exec();
    }
}
