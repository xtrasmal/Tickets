<?php namespace Modules\Tickets\Cases\Tickets;

class DeleteTicketRequest
{

    public $id;

    public function __construct($id)
    {

        $this->id = $id;

    }

}
