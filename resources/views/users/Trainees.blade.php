@extends('layouts.app')


@section('content')

    <div class="">
        <h5>Trainees</h5>

        <table>

            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($trainees as $trainee)
                    
                <tr>
                    <td>{{ $trainee->id }}</td>
                    <td>{{ $trainee->name }}</td>
                    <td>{{ $trainee->email }}</td>
                    <td>
                        @foreach ($trainee->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    
@endsection