@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row dashboard-table">
            @include('layouts.partials.dashboard') {{-- Dashboard Utente registrato --}}

            {{-- <h2>{{ $property->title }}</h2> --}}
            {{-- {{ $property->rooms_number }}
            {{ $property->beds_number }}
            {{ $property->bathrooms_number }}
            {{ $property->sqm_number }}
            {{ $property->address }}
            {{ $property->longitude }}
            {{ $property->latitude }}
            {{ $property->image }}
            {{ $property->visible }}
            {{ $property->price_per_night }}
            {{ $property->floor }}
            {{ $property->description }} --}}

        <div class="col-10">

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Proprietà') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        
                            <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Nome Appartamento</th>
                                            <th scope="col">Immagine</th>
                                            <th scope="col">Operazioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>NOME</td>
                                          <td>IMMAGINE</td>
                                          <td class="operations-button">
                                              
                                              <a href="" class="btn btn-info">Dettagli</a>
                                              <a href="" class="btn btn-info">Modifica</a>
                                              <form action="" class="d-inline-block" method="post">
                                                  @method('DELETE')
                                                  @csrf
                                                  <button class="btn btn-danger">Elimina</button>
                                              </form>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection