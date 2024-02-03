@extends('layouts.app')
@section('content')
<h1>Paramétre de découpe</h1>
<form method="POST" action="/historique">
      @csrf
      <div class=" mb-3">
          <span for="exampleInputPassword1" class="form-label">Nombre de découpe</span>  
            <div class="input-group mb-3">   
              <input type="text" id="valeurDecoupe" class="form-control  @error('valeurDecoupe') is-invalid @enderror"
              name="valeurDecoupe" value='{{ old('valeurDecoupe')}}' placeholder="">
                <button class="btn btn-outline-light" type="button"  id='decoupe' uk-toggle="target: #modal-pad-decoupe"> 
                    {{-- <img class="icon" src="storage/image/pad.png" alt="" srcset=""> --}}
                    <img class="icon" src="{{ Vite::asset('resources/images/pad.png') }}" alt="" srcset="">
                  </button> 
                  @error('valeurDecoupe')
                   <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
            </div>
        </div>
        <div class=" mb-3">
          <span for="exampleInputPassword1" class="form-label">longueur de découpe</span>  
            <div class="input-group mb-3">   
                <input type="text" id="valeurlongueur" class="form-control @error('valeurlongueur') is-invalid @enderror" 
                 name="valeurlongueur" value='{{old('valeurlongueur')}}' placeholder="">
                <button class="btn btn-outline-light" type="button" id='longueur' uk-toggle="target: #modal-pad-longueur"> 
                    {{-- <img class="icon" src="storage/image/pad.png" alt="" srcset=""> --}}
                    <img class="icon" src="{{ Vite::asset('resources/images/pad.png') }}" alt="" srcset="">
                  </button> 
                @error('valeurlongueur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
      <div class=" mb-3">
        <span for="exampleInputPassword1" class="form-label">Nom du client</span>  
          <div class="input-group mb-3">   
            <input type="text" id="valeurNom" class="form-control @error('valeurNom') is-invalid @enderror" 
              name="valeurNom" value='{{ old('valeurNom')}}' placeholder="">
              <button  type="button" class="btn btn-outline-light" uk-toggle="target: #modal-clavier">
              {{-- <img class="icon"  src="storage/image/clavier.png" alt="" srcset=""> --}}
              <img class="icon" src="{{ Vite::asset('resources/images/clavier.png') }}" alt="" srcset="">
              </button> 
              @error('valeurNom')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
      </div>
      <div class="valider uk-padding">
      <button type="submit" class="uk-button uk-button-primary btn-lg valider ">Valider</button>
      </div>
  </form>
@endsection
