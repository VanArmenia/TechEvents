@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Categories</h1>
            <h2>Events by category</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row event-bar row-no-padding">
        <div class="col">
            <a href="{{ route('welcome.index') }}">Home</a> /
             Categories
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h4>Upcoming Events by Category</h4>
            @include('partials.categories_table', ['categories' => $categories])
        </div>
    </div>

@endsection

