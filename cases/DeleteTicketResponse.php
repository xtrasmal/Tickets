<?php namespace App\Modules\Tickets\Cases;

use App\Modules\Tickets\Models\Ticket;

class DeleteTicketResponse
{

    public $ticket;

    public function __construct(Ticket $ticket)
    {

        $this->ticket = $ticket;

    }
}