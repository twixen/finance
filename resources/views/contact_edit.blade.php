@extends('layout')
@section('title', 'Edytuj kontakt')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $message)
    <li>{{$message}}<br>
        @endforeach
</div>
@endif
<form action="{{route('edit', $contact->id)}}" method="POST">
    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}">
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $contact->surname) }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
    </div>
    <div class="form-group">
        <label for="phone">Telefon</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
    </div>
    <div class="form-group">
        <label for="birthday">Data urodzenia</label>
        <input type="text" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $contact->birthday) }}">
        <small id="birthdayHelp" class="form-text text-muted">YYYY-MM-DD</small>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Dodaj kontakt</button>
</form>
@endsection