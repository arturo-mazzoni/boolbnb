@extends('layouts.app')

@section('content')

{{-- bootstrap slider --}}
<div class="bd-example slider-top">
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

<h2>i nostri sponsor</h2>


<div class="slider-sponsorizzati container my-4">

    <!--Carousel Wrapper-->
    
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls top-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left mr-5"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right ml-5"></i></a>
      </div>
      <!--/.Controls-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <div class="button-div">
                      <a class="btn bottone btn-primary">Vai all'appartamento</a>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <div class="button-div">
                    <a class="btn bottone btn-primary">Vai all'appartamento</a>
                  </div>
                </div>
              </div>
            </div> 
            
          </div>

        </div>
        <!--/.Third slide-->

      <!--/.Indicators-->
      </div>
      <!--/.Slides-->
      <!-- controls-bottom -->
        <div class="controls-bottom">
          <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left mr-5"></i></a>
          <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right ml-5"></i></a>
        </div>
      <!--/. controls-bottom -->
    </div>
    <!--/.Carousel Wrapper-->


  </div>






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
                <a class="btn bottoney" href="{{ route('become-host') }}">Clicca e scopri di più</a>
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


