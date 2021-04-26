@extends('layouts.app')

@section('content')

{{-- bootstrap slider --}}
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.themodernhonolulu.com/sites/www.themodernhonolulu.com/files/waikiki-beach-night_1920x542_1.jpg" class="d-block w-100" alt="img1">
        <div class="carousel-caption d-none d-md-block">
          <h2>Scegli di viaggiare con Aloha Travel</h2>
          <h5>Vivi negli appartamenti più belli di Honolulu!</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.viaggi-usa.it/wp-content/uploads/2017/06/Spiagge-Honolulu.jpg" class="d-block w-100" alt="img2">
        <div class="carousel-caption d-none d-md-block">
          <h2>Scrivi un'email ad un nostro host certificato</h2>
          <h5>Ti risponderà e inizierai il tuo viaggio</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2017/03/05/00/34/panorama-2117310_960_720.jpg" class="d-block w-100" alt="img3">
        <div class="carousel-caption d-none d-md-block">
          <h2>Ordina con Aloha Travel la tua struttura</h2>
          <h5>Con noi hai i migliori prezzi più bassi garantiti!</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
{{-- FINE bootstrap slider --}}


{{-- <div class="my-jumbotron">
    <div class="jumbo-image">
        <img src="https://www.themodernhonolulu.com/sites/www.themodernhonolulu.com/files/waikiki-beach-night_1920x542_1.jpg" alt="Honolulu">
    </div>    
</div> --}}


    <section class="houses-home">
        <h2>In Evidenza</h2>
        <div class="houses-list">
            <div class="houses-object">
                <div class="houses-box"></div>
                <div class="houses-text">
                    <div>Testo</div> 
                </div>
            </div>
            <div class="houses-object">
                <div class="houses-box"></div>
                <div class="houses-text">
                    <div>Testo</div> 
                </div>
            </div>
            <div class="houses-object">
                <div class="houses-box"></div>
                <div class="houses-text">
                    <div>Testo</div> 
                </div>
            </div>
            <div class="houses-object">
                <div class="houses-box"></div>
                <div class="houses-text">
                    <div>Testo</div> 
                </div>
            </div>
        </div>
    </section>

    <div id="roothome">
    <section class="explore-home">
        <h2>Esplora Honolulu</h2>
        <div id="explore-list">
            <div v-for="place in explorePlaces" class="explore-object">
                <div class="explore-box"> 
                    <img :src="place.img" :alt="place.name">
                </div>
                <div class="explore-text">
                    <div>@{{place.name}}</div>
                    <span>@{{place.address}}</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="become-host-home">
        <img src="https://cdn.pixabay.com/photo/2017/02/08/08/07/sunrise-2048060_960_720.jpg" alt="become-host">
        <div class="become-host-interact">
            <div>
                <h2>Diventa host</h2>
                <p>Condividi il tuo spazio per guadagnare qualcosa in più e scoprire nuove opportunità.</p>
                <a class="my-btn-home" href="">Scopri di più</a>
            </div>
        </div>
    </section>
    
    <section class="partners-home">
        <h2>I nostri partner</h2>
        <p>Scopri i migliori ristoranti a Honolulu.</p>
        <div class="partners-list">
            <div v-for="partner in partners" class="partners-object">
                <a :href="partner.link">
                    <div class="partners-box">
                        <img :src="partner.img" :alt="partner.name">
                    </div>
                    <div class="partners-text">
                        <div>@{{partner.name}}</div>
                        <span>@{{partner.address}}</span>
                    </div>
                </a>
                
            </div>
        </div>
    </section>    
</div>
@endsection


