@extends('layout')
@section('title', 'Kontakty')
@section('content')
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Data urodzenia</th>
            @if(auth()->check())
            <th scope="col">Akcje</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <th scope="row">{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->surname}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->birthday}}</td>
            @if(auth()->check())
            <td>
                <a href="{{route('delete', $contact->id)}}" onclick="return confirm('Na pewno?')">usuń</a>
                <a href="{{route('edit', $contact->id)}}">edytuj</a>
            </td>
            @endif

        </tr>
        @endforeach
    </tbody>
</table>
@endsection