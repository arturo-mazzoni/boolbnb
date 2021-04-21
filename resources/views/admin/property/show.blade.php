@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="row">
      
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block" src="https://www.ibizalowcost.com/wp-content/uploads/2018/01/living-appartamento-ikebanab3b-ibiza.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="https://images-1.casa.it/360x265/listing/cf1d4f20a98dd5995faf7b1aa6e531a3" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="https://www.ilmessaggero.it/photos/MED/51/65/3905165_1431_3066442_s_interni_loft.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="anteprima-img col-6">
      <div class="up-img">
        <img src="https://www.ibizalowcost.com/wp-content/uploads/2018/01/living-appartamento-ikebanab3b-ibiza.jpg" alt="">
        <img src="https://images-1.casa.it/360x265/listing/cf1d4f20a98dd5995faf7b1aa6e531a3" alt="">
      </div>

      <div class="down-img">
        <img src="https://www.ilmessaggero.it/photos/MED/51/65/3905165_1431_3066442_s_interni_loft.jpg" alt="">
        <img src="https://www.ibizalowcost.com/wp-content/uploads/2018/01/living-appartamento-ikebanab3b-ibiza.jpg" alt="">
      </div>
    </div>
  </div>



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
    {{-- @if (session('status'))
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
      <li>Foto: 
        <img src="{{ asset('storage/'.$property->image)  }}" alt=""> </li>
      <li>{{ $property->visible }}</li>
      <li>Prezzo: {{ $property->price_per_night }}</li>
      <li>Descrizione: {{ $property->description }}</li>
    </ul> --}}
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