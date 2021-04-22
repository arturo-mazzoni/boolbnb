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

  <div class="card-body"  id="chart-vue">
    <input type="text" id="propertyId" value="{{ $property->id }}" class="d-none">
    <input type="text" id="propertyName" value="{{ $property->title }}" class="d-none">
    <div class="row">
        <div class="col-sm-8 my-auto">
            <canvas id="myBarChart" width="100" height="50"></canvas>
        </div>
        <div class="col-sm-4 text-center my-auto">
            <div class="h4 mb-0 text-primary">100</div>
            <div class="small text-muted">visualizzazioni mese</div>
            <hr>
            <div class="h4 mb-0 text-warning">50</div>
            <div class="small text-muted">visualizzazioni settimana</div>
            <hr>
            <div class="h4 mb-0 text-success">25</div>
            <div class="small text-muted">visualizzazioni di oggi</div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-8 my-auto">
        <canvas id="lineChart" width="100" height="50"></canvas>
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
      <button style="margin-top:20px" type="submit" class="bottone padding-btn">Modifica</button>
      <form action="" class="d-inline-block" method="post">
          @method('DELETE')
          @csrf
          <button style="margin-top:20px" type="submit" class="bottone-rosso padding-btn">Elimina</button>
      </form>
    </div>
  </div>
</div>
  <div class="col-md-8">
    
        <ul class="list-group">
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-home mr-5"></i><strong>Nome:</strong> {{ $property->title }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-door-open mr-5"></i><strong>Stanze:</strong> {{ $property->rooms_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-bed mr-5"></i><strong>Letti:</strong> {{ $property->beds_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="far fa-square mr-5"></i><strong>Mq:</strong> {{ $property->sqm_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-map-marker-alt mr-5"></i><strong>Indirizzo:</strong> {{ $property->address }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-images mr-5"></i><strong>Foto:</strong> <img src="{{ asset('storage/'.$property->image)  }}" alt=""> </li> 
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-eye mr-5"></i><strong>Visibile:</strong> {{ $property->visible }}
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-money-bill-alt mr-5"></i><strong>Prezzo:</strong> {{ $property->price_per_night }}
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-info-circle mr-5"></i><strong>Descrizione:</strong><br> {{ $property->description }}
            </li>
          </ul>
    
    </div>

@endsection