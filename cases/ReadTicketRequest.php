<?php namespace App\Modules\Tickets\Cases;

class ReadTicketRequest
{

    public $id;

    public function __construct($id)
    {

        $this->id = $id;

    }

}
