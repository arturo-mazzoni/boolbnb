@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        
        <table class="table tabella table-striped col-11">
                <thead style="text-align:center" class="testa-tabella">
                    <tr>
                    <th scope="col" style="border:none" class="d-none d-lg-block">Immagine</th>
                        <th style="border:none" scope="col">Nome Appartamento</th>
                        <th style="border:none" scope="col">Operazioni</th>
                    </tr>
                </thead>
                <tbody style="text-align:center" >
                    @foreach ($properties as $property)
                    <tr>
                        <td class="d-none d-lg-block"> <img src="{{ asset('storage/'.$property->image)  }}" alt=""></td>
                        <td>{{ $property->title }}</td>
                  
                        
                        <td class="operations-button">
                            
                            <a href="{{ route('property.show', $property->id) }}" class="btn bottone border-radius-20"><i class="fas fa-info-circle d-lg-none"></i> <span  class="d-none d-lg-block">Dettagli</span></a>
                            <a href="{{ route('property.edit', $property->id) }}" class="btn bottone border-radius-20"><i class="fas fa-edit d-lg-none"></i> <span  class="d-none d-lg-block">Modifica</span></a>
                            <form action="{{ route('property.destroy', $property->id) }}" class="d-inline-block" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn bottone-rosso border-radius-20"><i class="far fa-times-circle d-lg-none"></i> <span class="d-none d-lg-block">Elimina</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>

@endsection