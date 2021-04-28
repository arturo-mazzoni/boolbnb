@extends('layouts.admin')
@section('content')
  
    <div id='sponsor'>
          @if($sponsor) 
            <div class= 'container'>
              <form id='payment-form' action='{{ route('payment.payment', $property->id) }}' method='post'>
                @csrf
                @method('POST')
                <h4>Hai selezionato l'appartamento: <strong>{{ $property->title }}</strong><br> Sito presso: <strong>{{ $property->address }}</strong></h4>
                <p><em>...ora scegli il pacchetto sponsor più adatto a te ! </em></p>
                <div class='layout-cards'>
                  <div class='card box-shadow-card ' style='width: 18rem;' v-for='(sponsor, index) in sponsors'>
                    <div class="card-body center-card"  :class="(counter == index) ? sponsor.title : '' " v-on:click="selection(sponsor, index)">
                      <h5 style="text-transform:capitalize" class='card-title '><strong>@{{ sponsor.title }} package</strong></h5>
                      
                      <p class='card-text'><span>Con questo pacchetto il tuo annuncio sarà in evidenza per</span> <strong>@{{ sponsor.duration }} giorni </strong></p>
                      <p class='card-text'> <i class="fas fa-coins"></i> @{{ sponsor.amount }}€</p>
                      {{-- <a href='#' class='btn btn-success'>Acquista</a> --}}
                      {{-- <input type='checkbox' name='mario' value=''> --}}
                    </div>
                  </div>
                </div>
                {{-- v-on:mouseenter='enter(index)' v-on:mouseleave='leave(index)' --}}
                <input type='hidden' id='sel' name='sponsor'>
                <div id='dropin-container'></div>
                {{-- <input type='number' name='sponsor'> --}}
                <input type='hidden' id='nonce' name='payment_method_nonce'/>
                <input class="btn bottone border-radius-20" id='paga' type='submit' />
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
            <div class='container result'>
              <div class='row d-flex justify-content-center'>
                <div class="card col-8 pt-3 pb-3">
                  <div class='card-body d-flex flex-column align-items-center'>
                      <h2>Sponsorizzazione già attiva</h2>
                      <div class='check-img'>
                        <img src='https://www.freeiconspng.com/uploads/error-icon-4.png' alt=''>
                      </div>
                  </div>
                </div>
              </div>
          
          @endif
        </div>
        
    </div>



<script src='{{ asset('js/sponsor.js') }}'></script>

@endsection