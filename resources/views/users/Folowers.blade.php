@extends('layouts.app')


@section('content')

    <div class="">
        <h5>Folowers</h5>

        <table>

            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($folowers as $folower)
                    
                <tr>
                    <td>{{ $folower->id }}</td>
                    <td>{{ $folower->name }}</td>
                    <td>{{ $folower->email }}</td>
                    <td>
                        @foreach ($folower->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    
@endsection