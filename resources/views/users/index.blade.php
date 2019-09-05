@extends('layouts.full')

@section('content')

    <h1>Registered Users</h1>

    @include('partials/users_table', ['users' => $users])

@endsection