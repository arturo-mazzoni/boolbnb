@extends('layouts.admin')

@section('content')

  <div class="row col-12">
    <div class="contenitore-radiobox col-12">
      <h4>Indica l'appartamento che vuoi sponsorizzare!</h4>
      <div class="list-group">
      
        <input type="radio" name="RadioInputName" value="Value1" id="Radio1" />
        <label class="list-group-item" for="Radio1"> $property->title1 di $property->address1</label>

        <input type="radio" name="RadioInputName" value="Value2" id="Radio2" />
        <label class="list-group-item" for="Radio2"> $property->title2 di $property->address2</label>
        
      </div>
    </div>
  </div>

  <div class="row col-12">

    <div class="col-sm-12 col-lg-4">
      <div class="contenitore-card-sponsor bg-oro">
        
          <div class="card-body">
            <h5 class="card-title">Gold Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
            <a style="text-decoration:none" href="#" class="bottone padding-btn">Attiva</a>
        </div>
      </div>
    </div>
    
    <div class="col-sm-12 col-lg-4 margin-right-20">
      <div class="contenitore-card-sponsor bg-argento">
        <div class="card-body ">
            <h5 class="card-title">Silver Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
          <a style="text-decoration:none" href="#" class="bottone padding-btn">Attiva</a>
        </div>
      </div>
    </div>
  
    <div class="col-sm-12 col-lg-4">
      <div class="contenitore-card-sponsor bg-bronzo">
          <div class="card-body">
            <h5 class="card-title">Bronze Package</h5>
            <p class="card-text">Con questo pacchetto il tuo annuncio sarà in evidenza per ... ore</p>
          <a style="text-decoration:none" href="#" class="bottone padding-btn">Attiva</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row col-12">
    <div class="col-12">
      <div class="card-body box-shadow-card bg-offerta text-center">
        <h5 class="card-title">Attenzione !</h5>
        <p class="card-text">La tua offerta scade il giorno {....}.</p>
        <a style="text-decoration:none" href="#" class="bottone padding-btn">Riattiva</a>
      </div>
    </div>
  </div>

@endsection