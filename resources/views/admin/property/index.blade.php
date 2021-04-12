@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row dashboard-table">
        
                            <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Nome Appartamento</th>
                                            <th scope="col">Immagine</th>
                                            <th scope="col">Operazioni</th>
                                            <th><a href="" class="btn btn-success">Crea nuovo</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $property)
                                        <tr>
                                          <td>{{ $property->title }}</td>
                                          <td>{{ $property->price_per_night }}</td>
                                          <td class="operations-button">
                                              
                                              <a href="{{ route('property.show', $property->id) }}" class="btn btn-info">Dettagli</a>
                                              <a href="{{ route('property.edit', $property->id) }}" class="btn btn-info">Modifica</a>
                                              <form action="{{ route('property.destroy', $property->id) }}" class="d-inline-block" method="POST">
                                                  @method('DELETE')
                                                  @csrf
                                                  <button class="btn btn-danger">Elimina</button>
                                              </form>
                                          </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
    </div>
</div>

@endsection