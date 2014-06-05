<?php namespace App\Modules\Tickets\Cases\Tickets;

class UpdateTicketRequest
{

    public $id;

    public function __construct($id)
    {

        $this->id = $id;

    }

}
