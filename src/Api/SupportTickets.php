<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx\Api;

use Lin\Ftx\Request;

class SupportTickets extends Request
{
    //authenticat requests signature
    protected $authorization=true;

/*    GET /support/tickets
    GET /support/tickets/<int:ticket_id>/messages
    POST /support/tickets
    POST /support/tickets/<int:ticket_id>/messages
    POST /support/tickets/<int:ticket_id>/status
    GET /support/tickets/count_unread
    GET /support/tickets/<int:ticket_id>/mark_as_read*/

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
