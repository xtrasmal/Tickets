<?php namespace App\Modules\Tickets\Cases\Tickets;

use App\Modules\Tickets\Models\Ticket;

class ReadTicketResponse
{

    public $ticket;

    public function __construct(Ticket $ticket)
    {

        $this->ticket = $ticket;

    }

}
