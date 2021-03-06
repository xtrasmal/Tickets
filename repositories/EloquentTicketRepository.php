<?php namespace Modules\Tickets\Repositories;

use Ill\Core\Events\EventGenerator;
use Modules\Tickets\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class EloquentTicketRepository
{

    private $model;

    public function __construct(Ticket $model)
    {

        $this->model = $model;

    }

    public function getById($id)
    {

        return $this->model->where('id', '=', $id)->first();

    }

    public function save(Model $model)
    {

        $model->save();

    }

    public function delete(Model $model)
    {

        $model->delete();

    }

}
