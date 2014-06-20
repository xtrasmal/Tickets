<?php namespace Modules\Tickets\Cases\Tickets;

use Ill\Core\Events\Dispatcher;
use Modules\Tickets\Models\Ticket;
use Ill\Core\CommandBus\Interfaces\HandlerInterface;
use Modules\Tickets\Repositories\EloquentTicketRepository;


class DeleteTicketHandler implements HandlerInterface
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
        $ticket->deleteTicket($ticket);
        // Dispatch the event
        $this->dispatcher->dispatch($ticket->releaseEvents());

        $this->repo->delete($ticket);

        return new DeleteTicketResponse($response);

    }

}
