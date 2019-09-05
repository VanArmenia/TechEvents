<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;


class EventsController extends Controller
{


        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
//            $events = Event::paginate(20);
            return view('admin.events.index');//->with('events', $events);
        }


}
