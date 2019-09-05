@if ($users->count() > 0)

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->first_name }}
                    </td>
                    <td>
                        {{ $user->last_name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $users->links() }}

@else

    <p>
        No users found.
    </p>

@endif
