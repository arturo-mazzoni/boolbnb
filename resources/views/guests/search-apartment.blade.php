<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CDN TOM TOM -->
  <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js"></script>
  <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/services/services-web.min.js"></script>
  <!-- fine CDN TOM TOM -->
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
            <img src="https://assets.jobs.bg/assets/logo/2014-04-29/b_04743888ac08f85b45b4c476c7941c6f.jpg" style="width:200px;" alt="Logo Airbnb">
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

    <main id="search-main">
    
        <div class="left-box">
            <div class="left-box-top">
                <h2>Soggiorni nell'area selezionata della mappa</h2>
                <div class="filters">
                    <span>filtro1</span>
                    <span>filtro2</span>
                    <span>filtro3</span>
                    <span>filtro4</span>
                </div>
            </div>
    
            <div class="left-box-bottom">
    
                <div v-for="apartment in finalApartments" class="apartment">
                    <div class="apartment-image">
                        <img :src="storagePath + apartment.image" alt="">
                    </div>
                    
                    <div class="apartment-info">
                        <div class="info-top">
                            <h3>@{{apartment.title}}</h3>
                            <div class="apartment-amenities">
                              <span v-for="amenity in apartment.amenity">@{{amenity['service']}}, </span>
                            </div>
                        </div>
                        <div class="info-bottom">@{{apartment.price_per_night}}</div>
                    </div>                
                </div>
    
            </div>
    
        </div>
    
        <div class="right-box">
        <!-- TOM TOM mappa-->
          <div style="width:100%;height:100%" id="map-div"></div>

        <!-- FINE TOM TOM mappa-->
        </div>
    </main>
  </div>

  @include('layouts.partials.footer')
<script src="{{ asset('js/AddressCheck.js') }}" defer></script>
</body>
</html>
