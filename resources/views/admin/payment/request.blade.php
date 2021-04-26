@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>
    <title>Document</title>
</head>
<body>
    {{-- @include('partials.header') --}}
    <div>
          @if($sponsor) 
            <div class= "container">
              <form id="payment-form" action="{{ route("payment.payment", $property->id) }}" method="post">
                @csrf
                @method('POST')
                <div class="row col-12">
                    <div class="contenitore-radiobox col-12">
                    <h4>Indica l'appartamento che vuoi sponsorizzare!</h4>     
                    <div class="list-group">
                    @foreach ($property as $properties)
                        <input type="radio" name="RadioInputName" value="{{ $property->id }}" id="{{ $property->id }}" />
                        <label class="list-group-item" for="{{ $property->id }}"> {{ $property->title }}</label>
                    @endforeach

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
                {{-- v-on:mouseenter="enter(index)" v-on:mouseleave="leave(index)" --}}
                <input type="hidden" id="sel" name="sponsor">
                <div id="dropin-container"></div>
                {{-- <input type="number" name="sponsor"> --}}
                <input type="hidden" id="nonce" name="payment_method_nonce"/>
                <input type="submit" />
                {{-- 4111 1111 1111 1111 --}}
              </form>
            </div>
            <script>
              const form = document.getElementById('payment-form');
              braintree.dropin.create({
                authorization: '{{ $token }}',
                container: '#dropin-container'
                }, (error, dropinInstance) => {
                  if (error) console.error(error);
                    form.addEventListener('submit', event => {
                      event.preventDefault();
                      dropinInstance.requestPaymentMethod((error, payload) => {
                        if (error) console.error(error);
                        // Step four: when the user is ready to complete their
                        //   transaction, use the dropinInstance to get a payment
                        //   method nonce for the user's selected payment method, then add
                        //   it a the hidden field before submitting the complete form to
                        //   a server-side integration
                        document.getElementById('nonce').value = payload.nonce;
                        form.submit();
                    });
                  });
                });
            </script>
          
          @else 
            <div class="container result">
              <div class="row d-flex justify-content-center">
                <div class="card col-8 pt-3 pb-3">
                  <div class="card-body d-flex flex-column align-items-center">
                      <h2>Sponsorizzazione già attiva</h2>
                      <div class="check-img">
                        <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
                      </div>
                  </div>
                </div>
              </div>
          
          @endif
        </div>
        {{-- @include('partials.footer') --}}
    </div>
    {{-- <script src="{{ asset('js/sponsor.js') }}"></script> --}}
</body>
</html>