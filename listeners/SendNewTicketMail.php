<?php namespace Modules\Tickets\Listeners;

use Ill\Core\Events\Interfaces\ListenerInterface;
use Ill\Core\Events\Interfaces\EventInterface;

class SendNewTicketMail implements ListenerInterface
{

    public function handle(EventInterface $event)
    {
        // Did you know that there is a Mailer:: class?
    }

}
