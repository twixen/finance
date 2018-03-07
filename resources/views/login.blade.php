@extends('layout')
@section('title', 'Logowanie')
@section('content')
@if(session('error'))
<div class="alert alert-danger" role="alert">
    <li>{{session('error')}}<br>
</div>
@endif
<form action="{{route('login')}}" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Hasło</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Zaloguj</button>
</form>
@endsection