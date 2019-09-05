@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>About TechEvents</h1>
            <h2>All about the drones, bots, and AIs behind this site</h2>
        </div>
    </div>
@endsection

@section('content')



        <div class="col-md-3 col-sm-12" style="margin: 0 auto;text-align: center;">
            <div class="card" style="border: none;">
                <div class="card-body">
                    <p class="card-text">
                        <i class="fa fa-github" aria-hidden="true"></i>
                        <a href="http://github.com/wjgilmore/TechEvents">TechEvents Source Code</a>
                    </p>
                </div>
            </div>


            <div class="card" style="border: none;">

                <div class="card-body">

                        <img src="{{ asset('img/techeventsmain.jpg') }}" class="img-fluid card-img-left" style="border: 1px solid black;" />
                    <h5 class="card-title">About TechEvents</h5>
                    <p class="card-text">TechEvents is the platform to make meetings between developers, IT managers, StartUP owners easy and seamless.</p>
                    <p class="card-text">
                        Best of all, all interested Laravel developers are provided with free access to the TechEvents GitHub repository.
                        Head on over to <a href="http://github.com/wjgilmore/TechEvents">GitHub</a> to download the latest release.
                    </p>

                </div>
            </div>




    </div>

@endsection

