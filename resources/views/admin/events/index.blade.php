@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <div>
                <h1>Manage Events</h1>
                <h2 class="d-none d-md-block">Here are all events created by users</h2>
            </div>
        </div>
    </div>
@endsection


@section('content')


    <div class="row">
        <div class="col mh-100">

            <event-list></event-list>



        </div>
    </div>

@endsection

