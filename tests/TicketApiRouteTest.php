<?php namespace App\Modules\Tickets\Tests;

use TestCase;

class TicketApiRouteTest extends TestCase {

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

    /**
     * Get all tickets route test
     *
     * @return void
     */
    public function testGetOneTicket()
    {
        $crawler = $this->client->request('GET', '/api/tickets/1');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Post a tickets route test
     *
     * @return void
     */
    public function testPostOneTicket()
    {
        $crawler = $this->client->request('POST', '/api/tickets');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Update a ticket route test
     *
     * @return void
     */
    public function testUpdateOneTicket()
    {
        $crawler = $this->client->request('PATCH', '/api/tickets/1');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Delete a ticket route test
     *
     * @return void
     */
    public function testDeleteOneTicket()
    {
        $crawler = $this->client->request('DELETE', '/api/tickets/1');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
