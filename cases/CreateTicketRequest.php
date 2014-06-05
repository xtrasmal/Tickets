<?php namespace App\Modules\Tickets\Cases;

class CreateTicketRequest
{

    public $title;
    public $active;

    public function __construct($title, $active)
    {

        $this->title = $title;
        $this->active = $active;

    }

}
