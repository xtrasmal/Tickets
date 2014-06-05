<?php namespace App\Modules\Tickets\Models;

use Ill\Core\Events\EventGenerator;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Tickets\Events\TicketReadEvent;
use App\Modules\Tickets\Events\TicketDeletedEvent;
use App\Modules\Tickets\Events\TicketUpdatedEvent;
use App\Modules\Tickets\Events\TicketCreatedEvent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TicketDepartment extends Model
{
    use EventGenerator;
    use SoftDeletingTrait;

    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $table = "ticketdepartments";

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