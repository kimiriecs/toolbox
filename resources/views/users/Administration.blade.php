@extends('layouts.app')


@section('content')

    <div class="">
        <h5>Administration</h5>

        <table>

            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($administrators as $admin)
                    
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        @foreach ($admin->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    
@endsection