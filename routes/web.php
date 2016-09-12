<?php

use Yajra\Datatables\Datatables;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/serverSide', [
    'as'   => 'serverSide',
    'uses' => function () {
        $users = App\Data::all();
        return Datatables::of($users)->make();
    }
]);