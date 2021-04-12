@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row dashboard-table">
            @include('layouts.partials.dashboard') {{-- Dashboard Utente registrato --}}
      <h1>admin home</h1>
    </div>
</div>

@endsection