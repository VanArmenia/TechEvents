@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Edit Your Event</h1>
            <h2>Update Your Event Details</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row" style="margin: 25px auto;">
        <div class="col-md-2 col-sm-12">
        </div>

        <div class="col-md-4 col-sm-12">

            <div class="card">
                <div class="card-body">
                    <div class="card-title map">
                        <gmap-map
                                :center="{lat: 38.871026, lng: -77.055959}"
                                :zoom="13"
                                :options="{styles: mapStyles, streetViewControl: false, zoomControl: false, mapTypeControl: false}"
                                map-type-id="roadmap"
                                style="width: 100%; height: 300px;"
                        >
                        </gmap-map>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="border: none;">
                                <span class="fa fa-building" style="color: #FFC200; padding-right: 5px;" aria-hidden></span>
                                Group 9
                            </li>
                            <li class="list-group-item" style="border: none;">
                                <span class="fa fa-map" style="color: #FFC200; padding-right: 5px;" aria-hidden></span>
                                Classified
                            </li>
                            <li class="list-group-item" style="border: none;">
                                <span class="fa fa-map-signs" style="color: #FFC200; padding-right: 5px;" aria-hidden></span>
                                Classified
                            <li class="list-group-item" style="border: none;">
                                <span class="fa fa-calendar" style="color: #FFC200; padding-right: 5px;" aria-hidden></span>
                                support@hackerpair.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4 col-sm-12">


            <form method="POST"  action="{{ $event->path() }}">
                @csrf
                @method('PATCH')


                @include ('events.form', [
                             'buttonText' => 'Update Event'
                            ])


            </form>
        </div>
        <div class="col-md-2 col-sm-12">
        </div>
    </div>



@endsection

