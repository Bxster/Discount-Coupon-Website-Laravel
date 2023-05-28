@extends('layouts.public')

@section('title', 'Lista Utenti')

@section('content')


    <h1>Elenco Utenti</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Nome</th>
                <th>Cognome</th>                
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr onclick="window.location='{{ route('admin.visualizzaUtente', $user->userId) }}';">
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
            </tr>
         @endforeach
        </tbody>
    </table>

@endsection