<?php namespace Modules\Tickets\Cases\Tickets;

use Modules\Tickets\Models\Ticket;

class CreateTicketResponse
{

    private $ticket;

    public function __construct(Ticket $ticket)
    {

        $this->ticket = $ticket;

    }


}
