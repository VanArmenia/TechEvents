@if (App::environment('production'))
    <nav class="navbar navbar-expand-lg navbar-custom navbar-static-top" style="background-color: #F9B608">
        <div class="container" style="text-align: center">
            <div class="col">
                TechEvents is currently a <strong>demo</strong> project. Data is regularly deleted.
                {{route('about.index') }}
            </div>
        </div>
    </nav>
@endif
<nav class="navbar navbar-expand-lg navbar-custom navbar-static-top" style="background-color: #0D2133;">
    <div class="container">

        <a class="logo" href="{{ url('/') }}">
            TechEvents
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">

                    <a href="{{ route('events.index') }}" class="nav-link">Events</a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('locations.index') }}" class="nav-link">Locations</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('about.index') }}" class="nav-link">About</a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.create') }}" class="nav-link">Contact Us</a>

                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                            Hi, {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropDown">
                            {{--@if(Auth::user()->is_admin)--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('users.index') }}"--}}
                                   {{--class="dropdown-item">--}}
                                    {{--Manage users--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('admin.events') }}"--}}
                                   {{--class="dropdown-item">--}}
                                    {{--Manage events--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--@endif--}}

                              <li>  <a  class="dropdown-item" href="{{ route('users.edit', ['id' => Auth::user()->id]) }}">Account Profile </a></li>
                            <li>  <a  class="dropdown-item" href="{{ route('favorites.index', []) }}">Favorited Events </a></li>

                            <li>  <a  class="dropdown-item" href="{{ route('users.upcoming.index', ['user' => Auth::user()->id]) }}">Upcoming Events</a></li>

                            <li>  <a  class="dropdown-item" href="{{ route('users.hosted.index', ['id' => Auth::user()->id]) }}">Hosted Events</a></li>


                            <li>
                                <a href="{{ route('logout') }}"
                                   class="dropdown-item"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('users.hosted.create', ['user' => Auth::user()]) }}">Post Event</a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @endauth

                <li class="nav-item">
                    {{--{!! \App\Helpers\Helpers::link_to_route_html('search.index','<i class="fa fa-search"></i>', null, ['class' => 'nav-link']) !!}--}}
                    </li>

            </ul>

        </div>
    </div>
</nav>
