@extends('layouts.admin')

@section('content')

  <div class="card card-margin col-9">
    <div class="card-body">
      <h5 class="card-title">La tua offerta</h5>
      <p class="card-text">La tua offerta scade il giorno {....}.</p>
      <a href="#" class="btn btn-primary">Riattiva</a>
    </div>
  </div>

  <div class="row card-margin">
    <div class="card col-3" style="width: 18rem;">
      <img src="https://cdn.mos.cms.futurecdn.net/FYjFKKZ65KqMgGUo2EwWER-1200-80.jpeg" class="card-img-top" alt="gold">
      <div class="card-body">
        <h5 class="card-title">Gold Package</h5>
        <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
        <a href="#" class="btn btn-primary">Compra</a>
      </div>
    </div>
  
    <div class="card col-3" style="width: 18rem;">
      <img src="http://www.aculon.com/wp-content/uploads/2020/10/silver.jpg" class="card-img-top" alt="silver">
      <div class="card-body">
        <h5 class="card-title">Silver Package</h5>
        <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
        <a href="#" class="btn btn-primary">Compra</a>
      </div>
    </div>
  
    <div class="card col-3" style="width: 18rem;">
      <img src="https://thumbs.dreamstime.com/b/d-realistic-render-pile-bronz-copper-bars-isolated-white-background-pile-bronz-copper-bars-isolated-white-123305461.jpg" class="card-img-top" alt="bronz">
      <div class="card-body">
        <h5 class="card-title">Bronz Package</h5>
        <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
        <a href="#" class="btn btn-primary">Compra</a>
      </div>
    </div>
  </div>

@endsection