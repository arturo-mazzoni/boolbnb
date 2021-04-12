@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row dashboard-table">
    {{-- <h2>{{ $property->title }}</h2> --}}
    {{-- {{ $property->rooms_number }}
    {{ $property->beds_number }}
    {{ $property->bathrooms_number }}
    {{ $property->sqm_number }}
    {{ $property->address }}
    {{ $property->longitude }}
    {{ $property->latitude }}
    {{ $property->image }}
    {{ $property->visible }}
    {{ $property->price_per_night }}
    {{ $property->floor }}
    {{ $property->description }} --}}
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <ul>
      <li>Nome: {{ $property->title }}</li>
      <li>Stanze: {{ $property->rooms_number }}</li>
      <li>Letti: {{ $property->beds_number }}</li>
      <li>Bagni: {{ $property->bathrooms_number }}</li>
      <li>Mq: {{ $property->sqm_number }}</li>
      <li>Indirizzo: {{ $property->address }}</li>
      <li>Foto: {{ $property->image }}</li>
      <li>{{ $property->visible }}</li>
      <li>Prezzo: {{ $property->price_per_night }}</li>
      <li>Descrizione: {{ $property->description }}</li>
    </ul>
    
    <div class="buttons">
      <a href="" class="btn btn-info">Modifica</a>
      <form action="" class="d-inline-block" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
  </div>
</div>

@endsection