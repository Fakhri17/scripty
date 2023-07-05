@extends('layouts.auth_dashboard')

@section('content')
    <h1>Welcome to dashboard {{ Auth::user()->name }}</h1>
@endsection
