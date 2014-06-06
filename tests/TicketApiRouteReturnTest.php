<?php namespace App\Modules\Tickets\Tests;

use TestCase;

class TicketApiRouteReturnTest extends TestCase {

    /**
     * Get all tickets route test
     *
     * @return void
     */
    public function testGetAllTickets()
    {
        $crawler = $this->client->request('GET', '/api/tickets');

        $this->assertTrue($this->client->getResponse()->isOk());
    }


}
