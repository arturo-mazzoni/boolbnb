<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
          
          <img src="https://assets.jobs.bg/assets/logo/2014-04-29/b_04743888ac08f85b45b4c476c7941c6f.jpg" style="width:200px;" alt="Logo Airbnb">
          
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
              <i class="fa fa-search" @click="" aria-hidden="true"></i>
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
    
                <div class="apartment">
                    <div class="apartment-image">
                        
                    </div>
                    
                    <div class="apartment-info">
                        <div class="info-top">
                            <h3>Nome appartamento</h3>
                            <div class="apartment-amenities">lista di tutti i servizi</div>
                        </div>
                        <div class="info-bottom">Prezzo</div>
                    </div>                
                </div>
    
            </div>
    
        </div>
    
        <div class="right-box"></div>
    </main>
  </div>

  @include('layouts.partials.footer')
<script src="{{ asset('js/AddressCheck.js') }}" defer></script>
<script src="{{ asset('js/search-apartment.js') }}" defer></script>
</body>
</html>