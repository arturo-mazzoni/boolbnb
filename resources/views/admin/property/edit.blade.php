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
  <form id="root" method="POST" action="{{ route('property.update', $property->id) }}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="form-group">
    <div class="row">
        <div class="col-md-6">
          <label for="title" class="form-label">Nome</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $property->title }}">
        </div>
        <div class="col-md-6">
          <label for="rooms" class="form-label">Numero Stanze</label>
          <input type="text" name="rooms_number" value="{{ $property->rooms_number }}" class="form-control" id="rooms">
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="bathrooms" class="form-label">Bagni</label>
        <input type="text" name="bathrooms_number" class="form-control" id="bathrooms" value="{{ $property->bathrooms_number }}">
      </div>
      <div class="col-md-6">
        <label for="beds" class="form-label">Letti</label>
        <input type="text" name="beds_number" class="form-control" id="beds" value="{{ $property->beds_number }}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="mq" class="form-label">Metri Quadrati</label>
        <input type="text" name="sqm_number" class="form-control" id="mq" value="{{ $property->sqm_number }}">
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Indirizzo</label>
        <input type="text" v-if="query == ''" value="{{ $property->address }}" name="address" class="form-control" id="address" placeholder="{{ $property->address }}">
        <input type="text" v-else v-model="query"  @keyup="searchadrres" value="{{ $property->address }}" name="address" class="form-control" id="address" placeholder="{{ $property->address }}">
        <div v-if="searchElement && query != 0" class="drop">
          <ul v-if="checked" class="list-group">
            <li v-for="(item,index) in searchElement"  @click="setstreets(item['address'].freeformAddress,index)" class="list-group-item "><i class="fas fa-map-marker-alt pr-2"></i>@{{item['address'].freeformAddress}}</li>
          </ul> 
          <input class="d-none"  type="text" name="longitude" :value="lon" class="form-control" >
          <input  class="d-none" type="text" name="latitude" :value="lat" class="form-control" >
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carica Immagine</label>
    
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div> 

@if ($property->image)
  <p>Immagine inserita:</p>

  @if (str_contains($property->image, 'http'))
    <img src="{{ $property->image  }}" alt="" style="max-width: 50%" class="mb-3">
  @else
    <img src="{{ asset('storage/'.$property->image)}}" alt="" style="max-width: 50%" class="mb-3">
  @endif
  
@else
  <p>Nessuna immagine caricata.</p>
@endif

  <div class="form-group">
    <label for="exampleFormControlFile1">Carica Immagini appartamento</label>
    <input type="file" multiple="multiple" name="images[]" class="form-control-file" id="exampleFormControlFile1">
  </div>

  @if ($property->images)
  <p>Immagine inserita:</p>

  @foreach ($property->images as $item)
    <img src="{{ asset('storage/'.$item->image)  }}" alt="" style="max-width: 50%" class="mb-3">      
  @endforeach

@else
  <p>Nessuna immagine caricata.</p>
@endif


  <div class="form-group">
    <label for="visible" class="form-label">visibilit??</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" {{($property->visible==1)?   "checked" :''}}  name="visible" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" {{($property->visible!=1)?   "checked" :''}}  name="visible" id="inlineRadio1" value="0">
      <label class="form-check-label" for="inlineRadio1">No</label>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name="price_per_night" class="form-control" id="price" value="{{ $property->price_per_night}}">
      </div>
      <div class="col-md-6">
        <label for="floor" class="form-label">Piano</label>
        <input type="text" name="floor" class="form-control" id="floor" value="{{ $property->floor }}">
      </div>
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
@section('script')
    <script src="{{ asset('js/AddressCheck.js') }}" defer></script>
@endsection