<?php namespace App\Modules\Tickets\Controllers;

use Ill\System\Base\BaseController;
use App\Modules\Tickets\Cases\Tickets\CreateTicketRequest;

class TicketController extends BaseController
{

    public function postTicket()
    {
        $command = new CreateTicketRequest(
            'Henk',
            '0'
        );

        $this->bus->execute($command);

        // return Redirect::action('TicketController@getViewTicket');

    }

    public function getTicket()
    {
        $command = new ReadTicketRequest('1');

        $this->bus->execute($command);

        // return Redirect::action('TicketController@getViewTicket');

    }
}
