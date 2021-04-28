<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- CDN TOM TOM -->
  <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js"></script>
  <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/services/services-web.min.js"></script>
  <!-- fine CDN TOM TOM -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
  <!-- Scripts -->
  
  <title>Document</title>
</head>
<body>
    <div id="root">
    <header id="search-apartment-header">
      <div id="my-header-search">
        <div class="wrap">
          
          <a href="{{ url('/') }}">
            <img src="https://assets.jobs.bg/assets/logo/2014-04-29/b_04743888ac08f85b45b4c476c7941c6f.jpg" style="width:170px;" alt="Logo Airbnb">
          </a>

        </div>
        
        <div id="my-search-bar" class="header-form">
          <form class="bottone-speciale" action="#">
          <label :data-state="state" for="search">
              <input type="text" v-model="query"  @keyup="searchadrres" name="address" id="address" placeholder="Ricerca.."/>
              <div v-if="searchElement " class="drop">
                                <ul id="my-ul-search" v-if="checked" class="list-group">
                                  <li id="my-li-search" v-for="(item,index) in searchElement"  @click="setstreets(item['address'].freeformAddress,index)" class="list-group-item "><i class="fas fa-map-marker-alt pr-2"></i>@{{item['address'].freeformAddress}}</li>
                                </ul> 
                            </div>
              <i class="fa fa-search" @click="searchApartment" aria-hidden="true"></i>
          </label></form>
          </ul>
        </div>
      </div>
          
    </header>

    {{-- titolo + container imgs --}}
    <section class="detail-imgs">
        <div class="titolo-via">
           <h3 class="title-details">{{ $property->title }}</h3>
            <h5> <i class="fas fa-map-marker-alt"> </i> {{ $property->address }}</h5>
        </div>
        <div class="container-detail-imgs">
            <div class="img-principale">
                @if (str_contains($property->image, 'http'))
                <img src="{{ $property->image  }}" alt="" style="object-fit:cover">
                @else
                <img src="{{ asset('storage/'.$property->image)  }}" alt="" style="object-fit:cover">          
                @endif
            </div>
            <div class="altre-imgs">
                @foreach ($property->images as $key=>$item)
                <div class="img-secondaria-1" :class="({{ $key }} == 1) ? 'img-secondaria-2' : ({{ $key }} == 3) ? 'img-secondaria-4' : '' "><img src="{{ asset('storage/'.$item->image)  }}" alt="" style="object-fit:cover"></div>
                @endforeach
            </div>
        </div>

    </section>
    {{-- FINE titolo + container imgs --}}
    {{-- dettagli appartamneto + contatta host--}}
    <section class="dettagli-contatta-host">
    <div class="row">
        <div class="col-md-6">
            <div class="dettagli-appartamento">
                <div class="row">
                    <ul class="col-6">
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="fas fa-door-open mr-4"></i></div><strong>Stanze: {{ $property->rooms_number }}

</strong> 
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="fas fa-bed mr-4"></i></div><strong>Letti: {{ $property->beds_number }}
</strong>  
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="fas fa-bath mr-4"></i></i></div><strong>Bagni: {{ $property->bathrooms_number }}</strong>  
                        </li>
                    </ul>
                    <ul class="col-6">
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="far fa-square mr-4"> </i></div><strong> Mq: {{ $property->sqm_number }}
</strong>  
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="fas fa-building mr-4"></i></i></div><strong>Piano: {{ $property->floor }}</strong> 
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line d-inline"><i class="fas fa-money-bill-alt mr-4"></i></div><strong>Prezzo: {{ $property->price_per_night }}</strong> 
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="col-12">
                        <li class="list-group-item">
                            <div><i class="fas fa-info-circle mr-4"></i><strong> Descrizione: </strong>{{ $property->description }}</div>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contatta-host">
                
                    <div class="container-contatta"> 
                        <div class="form-box">
                        <h4>Contatta l'host</h4>
                        <form action="">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input class="form-control" id="name" type="text" name="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Messaggio</label>
                                <textarea class="form-control" id="message" name="Message"></textarea>
                            </div>
                                <input style="width: 100%;" class="btn bottone border-radius-20" type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                
            </div>        
        </div>
    </div>

    
        
    </section>

    <section class="mappa-dettaglio"> 
        <h3>Visualizza l'appartamento sulla mappa!</h3>
        <!-- TOM TOM mappa-->
          <div style="width:100%;height:100%" id="map-div"></div>

        <!-- FINE TOM TOM mappa-->
    </section>





  {{-- fine div root --}}  
  </div>

  @include('layouts.partials.footer')
<script src="{{ asset('js/AddressCheck.js') }}" defer></script>
</body>
</html>
