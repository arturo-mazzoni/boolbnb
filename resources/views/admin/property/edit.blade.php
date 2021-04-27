@extends('layouts.admin')

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
<!-- Modifica -->
  <form method="POST" action="{{ route('property.update', $property->id) }}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="title" class="form-label">Nome</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $property->title }}">
  </div>
  <div class="form-group">
    <label for="rooms" class="form-label">Numero Stanze</label>
    <input type="text" name="rooms_number" class="form-control" id="rooms" value="{{ $property->rooms_number }}">
  </div>
  <div class="form-group">
    <label for="bathrooms" class="form-label">Bagni</label>
    <input type="text" name="bathrooms_number" class="form-control" id="bathrooms" value="{{ $property->bathrooms_number }}">
  </div>
  <div class="form-group">
    <label for="beds" class="form-label">Letti</label>
    <input type="text" name="beds_number" class="form-control" id="beds" value="{{ $property->beds_number }}">
  </div>
  <div class="form-group">
    <label for="mq" class="form-label">Metri Quadrati</label>
    <input type="text" name="sqm_number" class="form-control" id="mq" value="{{ $property->sqm_number }}">
  </div>
  <div class="form-group">
    <label for="address" class="form-label">Indirizzo</label>
    <input type="text" name="address" class="form-control" id="address" value="{{ $property->address }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carica Immagine</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
  {{-- @if ($property->image)
            <p>Immagine inserita:</p>
            <img src="{{$property->image}}" alt="" style="max-width: 50%" class="mb-3">
        @else
            <p>Nessuna immagine caricata.</p>
  @endif --}}
  <div class="form-group">
  
    <label for="visible" class="form-label">visibilità</label>
    
     <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" {{($property->visible==1)?   "checked" :''}}  name="visible" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" {{($property->visible!=1)?   "checked" :''}}  name="visible" id="inlineRadio1" value="0">
      <label class="form-check-label" for="inlineRadio1">No</label>
    </div>
  
  
  
  </div>
  <div class="form-group">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" name="price_per_night" class="form-control" id="price" value="{{ $property->price_per_night}}">
  </div>
  <div class="form-group">
    <label for="floor" class="form-label">Piano</label>
    <input type="text" name="floor" class="form-control" id="floor" value="{{ $property->floor }}">
  </div>

  <div>
    <div class="form-group">
      <label for="description" class="form-label">Descrizione</label>
      <input type="text" name="description" class="form-control" id="description" value="{{ $property->description }}">
    </div>
  
    @foreach($amenity as $item)
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="amenity[]" type="checkbox" id="inlineCheckbox1" value="{{$item->id}}" {{$property->amenities->contains($item->id) ? 'checked' : ''}}>
      <label class="form-check-label" for="inlineCheckbox1">{{$item->service}}</label> 
    </div>
    @endforeach 
  </div>
  

  <button style="margin-top:20px" type="submit" class="bottone padding-btn mb-5">Modifica</button>
  </form>
</div>
@endsection

