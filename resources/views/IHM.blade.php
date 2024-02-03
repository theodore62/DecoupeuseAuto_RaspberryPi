@extends('layouts.app')
@section('content')

    <h1>Paramétre initiale de découpe :</h1>
    <div class="uk-width-expand ">
        {{-- <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4> --}}  
        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
            <li> <h3> Nombre  de découpe   => {{ $parametres->NB_decoupe }}  </h3></li>
            <li> <h3> de découpe  => {{ $parametres->longueur_decoupe }} </h3> </li>
        </ul> 
    </div>
    <h1>Paramétre De découpe En cour</h1>
    <div class="uk-width-expand ">
        {{-- <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4> --}}
        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
            <li> <h3> Nombre de découpe Restante => </h3></li>
            <li> <h3> Nombre de Rouleau => </h3></li>
        </ul>
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: 25%">25%</div>
          </div>
    </div>
    <div class="valider uk-margin-top">
        <button type="button" class="btn btn-danger  btn-lg" id="js-modal-confirm" uk-toggle="target: #modal-annuler">Annuler</button>
        {{-- <button type="button" class="btn btn-outline-danger  btn-lg" id="js-modal-confirm" uk-toggle="target: #modal-success">ok</button>  --}}
    </div>

@endsection

