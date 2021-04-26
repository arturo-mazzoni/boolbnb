@extends('layouts.app')
@section('content')
@include('partials.header')
<div id="check">
  <div class="container result">
    <div class="row d-flex justify-content-center">
      <div class="card col-8 pt-3 pb-3">
        <div class="card-body d-flex flex-column align-items-center">
          @if(session('status'))
            <h2>Pagamento riuscito</h2>
            <div class="check-img">
              <img src="https://icons-for-free.com/iconfiles/png/512/complete+done+green+success+valid+icon-1320183462969251652.png" alt="">
            </div>
          @else
            <h2>Pagamento non riuscito</h2>
            <div class="check-img">
              <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection