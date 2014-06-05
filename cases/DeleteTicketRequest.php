<?php namespace App\Modules\Tickets\Cases;

class DeleteTicketRequest
{

    public $id;

    public function __construct($id)
    {

        $this->id = $id;

    }

}
