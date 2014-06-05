<?php namespace App\Modules\Tickets\Cases\Tickets;

class ReadTicketRequest
{

    public $id;

    public function __construct($id)
    {

        $this->id = $id;

    }

}
