<?php namespace Modules\Tickets\Events;

use Modules\Tickets\Models\Ticket;
use Ill\Core\Events\Interfaces\EventInterface;

class TicketUpdatedEvent implements EventInterface
{

    public $ticket;

    public function __construct(Ticket $ticket)
    {

        $this->ticket = $ticket;

    }

    public function getName()
    {

        return 'ticket.ticket_updated';

    }

}
