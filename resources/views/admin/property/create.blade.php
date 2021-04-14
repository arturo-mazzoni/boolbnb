@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
    <!-- asdsad -->
  <form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <div class="form-group">
    <label for="title" class="form-label">Nome</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="rooms" class="form-label">Numero Stanze</label>
    <input type="text" name="rooms_number" class="form-control" id="rooms">
  </div>
  <div class="form-group">
    <label for="bathrooms" class="form-label">Bagni</label>
    <input type="text" name="bathrooms_number" class="form-control" id="bathrooms">
  </div>
  <div class="form-group">
    <label for="beds" class="form-label">Letti</label>
    <input type="text" name="beds_number" class="form-control" id="beds">
  </div>
  <div class="form-group">
    <label for="mq" class="form-label">Metri Quadrati</label>
    <input type="text" name="sqm_number" class="form-control" id="mq">
  </div>
  <div class="form-group">
    <label for="address" class="form-label">Indirizzo</label>
    <input type="text" name="address" class="form-control" id="address">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carica Immagine Principale</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carica Immagini appartamento</label>
    <input type="file" multiple="multiple" name="images[]" class="form-control-file" id="exampleFormControlFile1">
  </div>
  {{-- @if ($post->cover)
            <p>Immagine inserita:</p>
            <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}" style="max-width: 50%" class="mb-3">
        @else
            <p>Nessuna immagine caricata.</p>
  @endif --}}
  <div class="form-group">
    <label for="visible" class="form-label">visibilità</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="visible" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="visible" id="inlineRadio1" value="0">
      <label class="form-check-label" for="inlineRadio1">No</label>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" name="price_per_night" class="form-control" id="price">
  </div>
  <div class="form-group">
    <label for="floor" class="form-label">Piano</label>
    <input type="text" name="floor" class="form-control" id="floor">
  </div>
  <div class="form-group">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text" name="description" class="form-control" id="description">
  </div>
    
  {{-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> --}}
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection

