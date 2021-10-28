@extends('layouts.app')


@section('content')

    <div class="">
        <h5>Trainers</h5>

        <table>

            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                    
                <tr>
                    <td>{{ $trainer->id }}</td>
                    <td>{{ $trainer->name }}</td>
                    <td>{{ $trainer->email }}</td>
                    <td>
                        @foreach ($trainer->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    
@endsection