@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  {{-- SEZIONE DETTAGLI --}}

    <div class="show-apartment-head">

      @if (str_contains($property->image, 'http'))
      <img src="{{ $property->image  }}" alt="" style="width: 400px;">
      @else
      <img src="{{ asset('storage/'.$property->image)  }}" alt="" style="width: 400px;">          
      @endif

      <div>
        <h2>{{-- <i class="fas fa-home"></i> --}} {{ $property->title }} </h2>

        <h5><i class="fas fa-map-marker-alt"></i> {{ $property->address }} </h5>

        <h5><i class="fas fa-info-circle"></i> {{ $property->description }} </h5>
      </div>
      
    </div>

    <div class="row">
        <ul class="col-sm-12 col-md-6 ">
            
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-door-open mr-4"></i></div><strong>Stanze:</strong> {{ $property->rooms_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-bed mr-4"></i></div><strong>Letti:</strong> {{ $property->beds_number }} 
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="far fa-square mr-4"> </i></div><strong> Mq:</strong> {{ $property->sqm_number }} 
            </li>

        </ul>
        <ul class="col-sm-12 col-md-6 ">
            
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-eye mr-4"></i></div><strong>Visibile:</strong> 
              @if ($property->visible == 1 )
                sì
              @else 
                no
              @endif
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-money-bill-alt mr-4"></i></div><strong>Prezzo:</strong> {{ $property->price_per_night }}
            </li>
            <li class="list-group-item">
              <div class="md-v-line d-inline"><i class="fas fa-couch mr-4"></i></div><strong>Servizi:</strong>
              @foreach ($property->amenities as $amenity)
                  {{ $amenity->service }}
                  @unless ($loop->last)
                      &sdot;
                  @endunless
              @endforeach
            </li>
          </ul>
    </div>
    {{-- Bottone sponsorizza --}}
    <a href="{{ route('payment.request', $property->id) }}" class="btn bottone border-radius-20">>> Sponsorizza il tuo appartamento! <<</a>
  
      

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