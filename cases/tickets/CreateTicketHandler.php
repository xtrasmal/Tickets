<?php namespace App\Modules\Tickets\Cases\Tickets;

use App\Modules\Tickets\Listeners\SendNewTicketMail;
use Ill\Core\Events\Dispatcher;
use App\Modules\Tickets\Models\Ticket;
use Ill\Core\CommandBus\Interfaces\HandlerInterface;
use App\Modules\Tickets\Validators\CreateTicketValidator;
use App\Modules\Tickets\Repositories\EloquentTicketRepository;


class CreateTicketHandler implements HandlerInterface
{

    private $repo;
    private $dispatcher;
    private $validator;

    public function __construct(EloquentTicketRepository $repo,
                                CreateTicketValidator $validator,
                                Dispatcher $dispatcher)
    {

        $this->repo = $repo;
        $this->dispatcher = $dispatcher;
        $this->validator = $validator;

    }

    public function handle($request)
    {
        // Validate
        $this->validator->validate($request);
        // Register
        $ticket = Ticket::register([
            'subject'     => $request->title,
            'solved'      => $request->active
        ]);

        // Add listener
        $this->dispatcher->addListener('ticket.ticket_created', new SendNewTicketMail);
        // Raise creation event
        $ticket->createTicket($ticket);
        // Dispatch the event
        $this->dispatcher->dispatch($ticket->releaseEvents());
        // Save the ticket
        $this->repo->save($ticket);
        // Respond
        return new CreateTicketResponse($ticket);
        
    }

}
