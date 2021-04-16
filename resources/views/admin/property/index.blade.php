@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        
        <table class="table tabella col-10">
                <thead style="text-align:center" class="testa-tabella">
                    <tr>
                        <th scope="col">Nome Appartamento</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Operazioni</th>
                    </tr>
                </thead>
                <tbody style="text-align:center" >
                    @foreach ($properties as $property)
                    <tr>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->price_per_night }}</td>
                        <td class="operations-button">
                            
                            <a href="{{ route('property.show', $property->id) }}" class="btn bottone border-radius-20"><i class="fas fa-info-circle"></i> Dettagli</a>
                            <a href="{{ route('property.edit', $property->id) }}" class="btn bottone border-radius-20"><i class="fas fa-edit"></i> Modifica</a>
                            <form action="{{ route('property.destroy', $property->id) }}" class="d-inline-block" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn bottone-rosso border-radius-20"><i class="far fa-times-circle"></i> Elimina</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>

@endsection