@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Contact TechEvents</h1>
            <h2>Your message will be delivered to our clandestine team</h2>
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
                                support@techevents.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4 col-sm-12">

            <p style="text-align: center; font-size: 18px;">
                Send us your questions, comments, and suggestions and someone will be in touch within
                24 hours.
            </p>

            <form method="POST" action="/contact">
                @csrf

                <div class="form-group">
                    <label class="" for="title">Your Name</label>


                        <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Your Name"
                                required
                        >

                </div>

                <div class="form-group">
                    <label class="" for="title">E-mail Address</label>


                        <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="E-mail Address"
                                required
                        >

                </div>
                <div class="form-group">
                    <label class="" for="title">Message</label>


                        <textarea

                                class="form-control"
                                name="msg"
                                placeholder="Message"
                                required
                                rows="4"
                                cols="50"
                        ></textarea>

                </div>

                <div class="form-group">
                    <label for="captcha">Captcha</label>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>
                <div class="form-group">
                    <div class="control">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12">
        </div>
    </div>



@endsection

