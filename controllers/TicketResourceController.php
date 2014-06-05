<?php namespace App\Modules\Tickets\Controllers;

use Ill\System\Base\BaseResourceController;
use App\Modules\Tickets\Cases\Tickets\ReadTicketRequest;
use App\Modules\Tickets\Cases\Tickets\DeleteTicketRequest;


class TicketResourceController extends BaseResourceController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $request     = new ReadTicketRequest($id);
        $response    = $this->bus->execute($request);
        return $this->response->json($response->ticket);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $request     = new DeleteTicketRequest($id);
        $response    = $this->bus->execute($request);
        return $this->response->json($response->ticket);
    }


}
