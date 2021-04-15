@extends('layouts.app')

@section('content')
<div class="my-jumbotron">
    <div class="jumbo-image">
        <img src="https://www.themodernhonolulu.com/sites/www.themodernhonolulu.com/files/waikiki-beach-night_1920x542_1.jpg" alt="Honolulu">
    </div>
    <div class="jumbo-text">
        <span>Grazie agli host puoi</span>
    </div>
</div>
<div id="app">
    <h1>@{{ message }}</h1>
</div>
<section class="explore-home">
    <h2>Esplora Honolulu</h2>
    <div id="explore-list">
        
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
        <div class="partners-object">
            <div class="partners-box"></div>
            <div class="partners-text">
                <div>Testo</div>
                <span>Testo lungo</span>
            </div>
        </div>
        <div class="partners-object">
            <div class="partners-box"></div>
            <div class="partners-text">
                <div>Testo</div>
                <span>Testo lungo</span>
            </div>
        </div>
        <div class="partners-object">
            <div class="partners-box"></div>
            <div class="partners-text">
                <div><a href="https://www.tripadvisor.it/Restaurant_Review-g60982-d13189091-Reviews-Nalu_Health_Bar_Cafe-Honolulu_Oahu_Hawaii.html">Nalu Health Bar & Cafe</a></div>
                <span>1170 Auahi St Suite 145, Honolulu, Oahu, HI 96814-4946</span>
            </div>
        </div>
    </div>
</section>
@endsection


