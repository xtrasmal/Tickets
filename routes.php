<?php
// User
Route::group(
    [
        'namespace' =>	'App\Modules\Tickets\Controllers',
        'prefix'	=>	'api',
    ],
    function()
    {
        Route::resource('tickets', 'TicketResourceController',['only' => ['index','show']]);
    }
);
// Admin
Route::group(
    [
        'namespace' =>	'App\Modules\Tickets\Controllers',
        'prefix'	=>	'api',
    ],
    function()
    {
        Route::resource('tickets', 'TicketResourceController',['only' => ['store','update','destroy']]);
    }
);
// Special
