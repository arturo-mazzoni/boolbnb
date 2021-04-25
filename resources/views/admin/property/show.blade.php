@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  {{-- SEZIONE DETTAGLI --}}
    <div class="row">
        <ul class="col-sm-12 col-md-6 ">
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-home mr-4"></i></div ><strong>Nome:</strong> {{ $property->title }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-door-open mr-4"></i></div><strong>Stanze:</strong> {{ $property->rooms_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-bed mr-4"></i></div><strong>Letti:</strong> {{ $property->beds_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="far fa-square mr-4"> </i></div><strong> Mq:</strong> {{ $property->sqm_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-map-marker-alt mr-4"></i></div><strong>Indirizzo:</strong> {{ $property->address }} 
            </li>
        </ul>
        <ul class="col-sm-12 col-md-6 ">
            
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-images mr-4"></div></i><strong>Foto:</strong> <img src="{{ asset('storage/'.$property->image)  }}" alt=""> </li> 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-eye mr-4"></i></div><strong>Visibile:</strong> {{ $property->visible }}
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-money-bill-alt mr-4"></i></div><strong>Prezzo:</strong> {{ $property->price_per_night }}
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-info-circle mr-4"></i></div><strong> Descrizione:</strong><br> {{ $property->description }}
            </li>
          </ul>
    </div>
    {{-- SEZIONE IMMAGINI --}}
  
      

    {{-- SEZIONE GRAFICI --}}
  <div class="card-body"  id="chart-vue">
    <input type="text" id="propertyId" value="{{ $property->id }}" class="d-none">
    <input type="text" id="propertyName" value="{{ $property->title }}" class="d-none">
    <div class="row">
      <div class="col-md-12 my-auto  contenitore-dettagli">
          <canvas id="myBarChart" width="100" height="25"></canvas>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 my-auto  contenitore-dettagli">
        <canvas id="lineChart" width="100" height="50"></canvas>
      </div>
      <div class="col-sm-12 col-md-6 my-auto  contenitore-dettagli">
        <canvas id="lineChartYear" width="100" height="50"></canvas>
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
    @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif

    {{-- <div class="buttons">
      <button style="margin-top:20px" type="submit" class="bottone padding-btn">Modifica</button>
      <form action="" class="d-inline-block" method="post">
          @method('DELETE')
          @csrf
          <button style="margin-top:20px" type="submit" class="bottone-rosso padding-btn">Elimina</button>
      </form>
    </div> --}}
  </div>
</div>
  

@endsection