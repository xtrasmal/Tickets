<?php namespace App\Modules\Tickets\Cases;

use Ill\Core\Events\Dispatcher;
use App\Modules\Tickets\Models\Ticket;
use Ill\Core\CommandBus\Interfaces\HandlerInterface;
use App\Modules\Tickets\Repositories\EloquentTicketRepository;


class ReadTicketHandler implements HandlerInterface
{

    private $repo;
    private $dispatcher;

    public function __construct(EloquentTicketRepository $repo,
                                Dispatcher $dispatcher)
    {

        $this->repo = $repo;
        $this->dispatcher = $dispatcher;
    }

    public function handle($request)
    {

        $response = $this->repo->getById($request->id);

        // Create a ticket object
        $ticket = new Ticket;
        // Raise creation event
        $ticket->readTicket($ticket);
        // Dispatch the event
        $this->dispatcher->dispatch($ticket->releaseEvents());

        return new ReadTicketResponse($response);

    }

}
