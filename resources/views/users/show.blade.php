@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Utente: {{ $user->name }}</h1>
        <ul>
          <li><strong>ID: </strong>{{$user->id}}</li>
          <li><strong>Nome: </strong>{{$user->name}}</li>
          <li><strong>Cognome: </strong>{{$user->lastname}}</li>
          <li><strong>Età: </strong>{{$user->age}}</li>
          <li><strong>Sesso: </strong>{{$user->gender}}</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
