@extends('include.admin.app_admin')
@section('title','dashboard')
@section('content')
<div class="container text-center">
    <h1>=== Welcome, {{ Auth::user()->name }} ===</h1>
</div>
@endsection