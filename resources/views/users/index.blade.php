@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>
    <p>Total users: {{ count($users) }}</p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">Date Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['full_name'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td>{{ $user['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
