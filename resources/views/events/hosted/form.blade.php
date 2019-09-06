    <div class="form-group">


        <label class="control-label" for="name">Event Name</label>

        <input
                type="text"
                class="form-control input-lg"
                name="name"
                id="name"
                placeholder="PHP Hacking and Pizza"
                required
                {{--value="{{ $event->name }}"--}}
        >

    </div>

    <div class="form-group">

    <label class="control-label" for="category_id">Category</label><br />

    <select name="category_id">
    @foreach( $category as $speccategory )
    <option value="{{ $speccategory->id }}" >{{ $speccategory->name }}.</option>
    @endforeach
    </select>

    </div>


    <div class="form-group">
        <label class="" for="max_attendees">Maximum Number of Attendees (including you)</label>

        <select name="max_attendees" id="max_attendees" class="form-control input-lg">

            @foreach( $max_attendees as $max_attendee )
                @if ($max_attendee  == $event->max_attendees )
                    <option value="{{ $max_attendee }}" selected>{{ $max_attendee }}</option>
                @else
                    <option value="{{ $max_attendee }}" >{{ $max_attendee }}.</option>
                @endif

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="control-label" for="start_date">Starting Date</label>

        <date-picker
                placeholder="Select an event date"
                defaultvalue="{{$carbon->now()}}"
                name="start_date">

        </date-picker>


    </div>

    {{--<div class="form-group">--}}

        {{--<label class="control-label" for="start_time">Starting Time</label>--}}

        {{--<select name="start_time" id="start_time" class="form-control input-lg">--}}
            {{--@foreach( $starttime as $specstarttime )--}}
                {{--<option value="{{ $specstarttime->format('Y-m-d H:i:s.u0') }}" >{{ $specstarttime}}.</option>--}}
            {{--@endforeach--}}

        {{--</select>--}}


    {{--</div>--}}


    <div class="form-group">
        <label class="" for="description">Description</label>

        <textarea

                class="form-control input-lg"
                name="description"
                id="description"
                placeholder="Describe the event"
                required
                rows="4"
                cols="50"

        >

        </textarea>
    </div>

    <div class="form-group">
        <label class="" for="oneliner">Short Description</label>

        <textarea

                class="form-control input-lg"
                name="oneliner"
                id="oneliner"
                placeholder="Describe the event"
                required
                rows="2"
                cols="50"
        >

        </textarea>
    </div>
    <div class="form-group">
        <label class="control-label" for="state_id">State</label>
        <select name="state_id" id="state_id" class="form-control input-lg">

            @foreach( $states as $key => $state )

                @if ($key == $event->state_id )
                    <option value="{{ $state }}" selected>{{ $state }}</option>
                @else
                    <option value="{{ $state }}" >{{ $state}}.</option>
                @endif

            @endforeach
        </select>
    </div>
    <div class="form-group">

        <label class="control-label" for="city">City</label>

        <input
                type="text"
                class="form-control input-lg"
                name="city"
                id="city"
                placeholder="Starbucks"
                required
        >
    </div>
    <div class="form-group">

        <label class="control-label" for="venue">Venue</label>

        <input
                type="text"
                class="form-control input-lg"
                name="venue"
                id="venue"
                placeholder="Starbucks"
                required
                {{--value="{{ $event->venue }}"--}}
        >
    </div>

    <div class="form-group">
        <label class="control-label" for="street">Street</label>

        <input
                type="text"
                class="form-control input-lg"
                name="street"
                id="street"
                placeholder="21 Jump Street"
                required
                {{--value="{{ $event->street }}"--}}
        >
    </div>
    <div class="form-group">

        <label class="control-label" for="zip">Zip Code</label>

        <input
                type="text"
                class="form-control input-lg"
                name="zip"
                id="zip"
                placeholder="Starbucks"
                required
        >
    </div>

    <div class="form-group">
        <label class="control-label" for="published">Publish this event immediately?</label>

        <input
                type="checkbox"
                name="published"
                id="published"
                class="form-control input-lg"
                {{--{{ $event->published ? 'checked' : '' }}--}}

        >

    </div>

    <div class="form-group">
        <div class="control">
            <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

        </div>
    </div>







