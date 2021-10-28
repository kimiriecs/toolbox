@extends('layouts.app')


@section('content')

    <div class="">

        <table class="table">

            <thead class="table--header">
                <tr class="table--header-row">
                    @foreach ($columns as $col)
                        @if (in_array($col, $columnsToRetrive))
                            <th class="table--header-cell">{{ ucfirst($col) }}</th>
                        @endif
                    @endforeach
                    <th class="table--header-cell">Role</th>
                    <th class="table--header-cell">Actions</th>
                </tr>
            </thead>
            <tbody class="table--body">
                @foreach ($users as $user)

                    <tr class="table--body-row">
                        @foreach ($columns as $col)
                            @if (in_array($col, $columnsToRetrive))
                                <td class="table--body-cell">{{ ucfirst($user->$col) }}</td>
                            @endif
                        @endforeach
                        <td class="table--body-cell">
                            @foreach ($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td class="table--body-cell">
                            <button type="submit" class="edit-buttot">Edit</button>
                            <button type="submit" class="view-buttot">View Profile</button>
                            @if (!$user->isAdmin() && !$user->isOwner())
                                <button type="submit" class="delete-buttot">Delete</button>
                            @endif
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>

    </div>

@endsection
