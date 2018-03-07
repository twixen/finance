@extends('layout')
@section('title', 'Edytuj kontakt')
@section('content')
<form action="{{route('edit', $contact->id)}}" method="POST">
    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$contact->name}}">
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{$contact->surname}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
    </div>
    <div class="form-group">
        <label for="phone">Telefon</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
    </div>
    <div class="form-group">
        <label for="birthday">Data urodzenia</label>
        <input type="text" class="form-control" id="birthday" name="birthday" value="{{$contact->birthday}}">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Dodaj kontakt</button>
</form>
@endsection