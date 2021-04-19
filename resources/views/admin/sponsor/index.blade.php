@extends('layouts.admin')

@section('content')

  <div class="row col-12">
    <div class="col-12">
      <div class="card-body box-shadow-card">
        <h5 class="card-title">La tua offerta</h5>
        <p class="card-text">La tua offerta scade il giorno {....}.</p>
        <a style="text-decoration:none" href="#" class="bottone padding-btn">Riattiva</a>
      </div>
    </div>
  </div>
  
  <div class="row col-12">

    <div class="col-sm-12 col-lg-4">
      <div class="contenitore-card-sponsor">
        <img src="https://cdn.mos.cms.futurecdn.net/FYjFKKZ65KqMgGUo2EwWER-1200-80.jpeg" class="card-img-top" alt="gold">
          <div class="card-body">
            <h5 class="card-title">Gold Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
            <a style="text-decoration:none" href="#" class="bottone padding-btn">Compra</a>
        </div>
      </div>
    </div>
    
    <div class="col-sm-12 col-lg-4 margin-right-20">
      <div class="contenitore-card-sponsor">
        <img src="https://cdn.mos.cms.futurecdn.net/FYjFKKZ65KqMgGUo2EwWER-1200-80.jpeg" class="card-img-top" alt="silver">
          <div class="card-body">
            <h5 class="card-title">Silver Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
            <a style="text-decoration:none" href="#" class="bottone padding-btn">Compra</a>
          </div>
      </div>
    </div>
  
    <div class="col-sm-12 col-lg-4">
      <div class="contenitore-card-sponsor">
        <img src="https://cdn.mos.cms.futurecdn.net/FYjFKKZ65KqMgGUo2EwWER-1200-80.jpeg" class="card-img-top" alt="bronz">          <div class="card-body">
          <h5 class="card-title">Bronz Package</h5>
          <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
          <a style="text-decoration:none" href="#" class="bottone padding-btn">Compra</a>
        </div>
      </div>
    </div>
</div>

@endsection