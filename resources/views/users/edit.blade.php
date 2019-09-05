@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container" style="padding-bottom: 35px;">
            <h1>Update Your Account Profile</h1>
            <h2>Tell fellow TechEvents members all about you!</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">

            <form method="POST"  action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PATCH')


            <h4>General Info</h4>

                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                    <div class="col-md-6">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  required autocomplete="first_name" autofocus>

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  required autocomplete="last_name" autofocus>

                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>





                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>




            <hr />

            <h4>Profile</h4>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>

                    <div class="col-md-6">
                        <textarea id="bio" type="text" class="form-control @error('title') is-invalid @enderror" name="bio"  autocomplete="bio" placeholder="Say a little something about yourself">

                            {{ old('bio') }}
                        </textarea>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

            <hr />

            <h4>Location</h4>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control @error('zip') is-invalid @enderror" name="city" value="{{ old('city') }}"  required autocomplete="city" placeholder="Add your city for localized results">

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

                    <div class="col-md-6">
                        <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}"  required autocomplete="zip">

                        @error('zip')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="timezone" class="col-md-4 col-form-label text-md-right">{{ __('Time Zone') }}</label>
                    <div class="col-md-6">
                        <select name="timezone" id="timezone" class="form-control input-lg">
                            <option value="" class="form-control @error('timezone') is-invalid @enderror" selected>-</option>
                            <option value="America/New_York" class="form-control @error('timezone') is-invalid @enderror" >America/New_York</option>
                            <option value="America/Chicago" class="form-control @error('timezone') is-invalid @enderror" >America/Chicago</option>
                            <option value="America/Denver" class="form-control @error('timezone') is-invalid @enderror" >America/Denver</option>
                            'America/Phoenix'     => 'Mountain Time (no DST)',
                            'America/Los_Angeles' => 'Pacific Time',
                            'America/Anchorage'   => 'Alaska Time',
                            'America/Adak'        => 'Hawaii-Aleutian (no DST)',
                            'Pacific/Honolulu'    => 'Hawaii-Aleutian Time (no DST)'

                        </select>

                        @error('timezone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                {{--<div class="col-md-6 col-xs-12">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="title">State</label>--}}
                        {{--{!! Form::select('state_id',--}}
                         {{--App\State::pluck('name', 'id'),--}}
                         {{--null,--}}
                         {{--[--}}
                             {{--'id'          => 'state_id',--}}
                             {{--'class'       => 'form-control',--}}
                         {{--]--}}
                         {{--) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}


            <hr />

            <h4>Social</h4>

            {{--<div class="row">--}}
                {{--<div class="col-xs-12 col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('handle_twitter', 'Twitter Handle') !!}--}}
                        {{--{!! Form::text('handle_twitter', null, ['class' => 'form-control']) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('handle_github', 'GitHub Handle') !!}--}}
                        {{--{!! Form::text('handle_github', null, ['class' => 'form-control']) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Profile') }}
                        </button>
                    </div>
                </div>

               </form>
            <br />
        </div>

    </div>

@endsection
