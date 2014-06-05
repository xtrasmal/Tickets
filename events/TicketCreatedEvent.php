<?php namespace App\Modules\Tickets\Events;

use App\Modules\Tickets\Models\Ticket;
use Ill\Core\Events\Interfaces\EventInterface;

class TicketCreatedEvent implements EventInterface
{

    public $ticket;

    public function __construct(Ticket $ticket)
    {

        $this->ticket = $ticket;

    }

    public function getName()
    {

        return 'ticket.ticket_created';

    }

}
