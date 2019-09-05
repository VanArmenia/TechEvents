@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Events by State</h1>
            <h2>Check out events in your home state!</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div style="padding: 15px 0px 15px 0px;">
                <a href="{{ route('locations.index') }}">Locations</a>
                <a href="{{ route('states.index') }}">States</a>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upcoming Events</h4>
                    <p class="card-text">

                        @include('partials/states_table', ['states' => $states])

                    </p>
                </div>
            </div>

        </div>

    </div>

@endsection
