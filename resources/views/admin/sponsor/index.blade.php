@extends('layouts.admin')

@section('content')

  <div class="row col-12">
    <div class="card  col-12">
      <div class="card-body ">
        <h5 class="card-title">La tua offerta</h5>
        <p class="card-text">La tua offerta scade il giorno {....}.</p>
        <a href="#" class="btn btn-primary">Riattiva</a>
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
              <a href="#" class="btn btn-primary">Compra</a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-12 col-lg-4 margin-right-20">
        <div class="contenitore-card-sponsor">
          <img src="http://www.aculon.com/wp-content/uploads/2020/10/silver.jpg" class="card-img-top" alt="silver">
            <div class="card-body">
              <h5 class="card-title">Silver Package</h5>
              <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
              <a href="#" class="btn btn-primary">Compra</a>
            </div>
        </div>
      </div>
    
      <div class="col-sm-12 col-lg-4">
        <div class="contenitore-card-sponsor">
          <img src="https://thumbs.dreamstime.com/b/d-realistic-render-pile-bronz-copper-bars-isolated-white-background-pile-bronz-copper-bars-isolated-white-123305461.jpg" class="card-img-top" alt="bronz">
          <div class="card-body">
            <h5 class="card-title">Bronz Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
            <a href="#" class="btn btn-primary">Compra</a>
          </div>
        </div>
      </div>
  </div>

@endsection