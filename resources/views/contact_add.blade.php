@extends('layout')
@section('title', 'Dodaj kontakt')
@section('content')
<form action="{{route('add')}}" method="POST">
    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko</label>
        <input type="text" class="form-control" id="surname" name="surname">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="phone">Telefon</label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="birthday">Data urodzenia</label>
        <input type="text" class="form-control" id="birthday" name="birthday">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Dodaj kontakt</button>
</form>
@endsection