<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;


class EventsController extends Controller
{
    public function index(){

        return Event::withoutGlobalScopes()->select('name', 'venue','published')->orderBy('start_date', 'desc')->paginate(10);

 }
}
