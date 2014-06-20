<?php namespace Modules\Tickets\Models;

use Ill\Core\Events\EventGenerator;
use Illuminate\Database\Eloquent\Model;
use Modules\Tickets\Events\TicketReadEvent;
use Modules\Tickets\Events\TicketDeletedEvent;
use Modules\Tickets\Events\TicketUpdatedEvent;
use Modules\Tickets\Events\TicketCreatedEvent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TicketStatus extends Model
{
    use EventGenerator;
    use SoftDeletingTrait;


    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $table = "ticketstatuses";

//    public static function register($attributes)
//    {
//
//        $ticket = new static([
//            'subject'       => $attributes['subject'],
//            'solved'        => $attributes['solved'],
//        ]);
//
//        return $ticket;
//
//    }
//
//    public function createTicket($ticket)
//    {
//
//        $this->raise(new TicketCreatedEvent($ticket));
//        return $ticket;
//
//    }
//
//    public function readTicket($ticket)
//    {
//
//        $this->raise(new TicketReadEvent($ticket));
//        return $ticket;
//
//    }
//
//    public function updateTicket($ticket)
//    {
//
//        $this->raise(new TicketUpdatedEvent($ticket));
//        return $ticket;
//
//    }
//
//    public function deleteTicket($ticket)
//    {
//
//        $this->raise(new TicketDeletedEvent($ticket));
//        return $ticket;
//
//    }

}
