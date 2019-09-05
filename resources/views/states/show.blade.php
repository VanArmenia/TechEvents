@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 style="color: white; font-size: 4.0em; font-weight: 900; margin-top: 10px; margin-bottom: 2px;">{{ $state->name }} Event Locations</h1>
            <p style="font-size: 2em; margin-top: 3px; color: #D9A648; font-weight: 700;">
                Popular categories in {{ $state->name }}:
                {{ $state->popularCategories()->implode('name', ', ') }}
            </p>
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

            @include('partials/events_table', ['events' => $events])

        </div>

    </div>

@endsection
