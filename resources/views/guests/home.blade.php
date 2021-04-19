@extends('layouts.app')

@section('content')
<div class="my-jumbotron">
    <div class="jumbo-image">
        <img src="https://www.themodernhonolulu.com/sites/www.themodernhonolulu.com/files/waikiki-beach-night_1920x542_1.jpg" alt="Honolulu">
    </div>    
</div>

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
    
    <section class="become-host-home">
        <img src="https://a0.muscache.com/im/pictures/48893cdc-221e-4eaf-b624-8956600550db.jpg" alt="become-host">
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


