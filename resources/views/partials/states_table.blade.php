<table class="table table-hover">
    <thead>
    <th>State</th>
    <th>Upcoming Events</th>
    <th>Recently Posted</th>
    </thead>
    <tbody>
    @foreach ($states as $state)
        <tr>
            <td>
                <a href="{{ route('states.show',[$state->state->abbreviation] )}}">{{$state->state->name}}</a>
          <br/>
            </td>
            <td>
                {{ $state->total }}
            </td>
            <td>

                @include('partials.event_link', ['event' => $state->state->mostRecentEvent()])
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
