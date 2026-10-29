@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to SwiftPOS</h1>
    <p>Keep your store's customer and staff information in one place.</p>
    <p>Use the links below to browse customer accounts and user accounts.</p>

    <a class="button" href="{{ route('customers.index') }}">View Customer Accounts</a>
    <a class="button" href="{{ route('users.index') }}">View User Accounts</a>
@endsection
