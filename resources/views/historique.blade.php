@extends('layouts.app')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead class="table-dark ">
            <th class="uk-table-expand">Date</th>
            <th class="uk-table-expand">Client</th>
            <th class="uk-table-expand">rouleau</th>
            <th class="uk-table-expand">Découpe</th>
            <th class="uk-table-expand">Action</th>
        </thead>
        <tbody>
            @foreach ($historiques as $historique)
            <tr>
                {{-- <td><input class="uk-checkbox" type="checkbox" value="{{$historique->id }}" data-id="{{$historique->id }}"></td> --}}
                <td class="date">{{ $historique->date}}</td>
                <td class="client">{{   $historique->client    }}</td>
                <td class="rouleau">{{  $historique->NB_rouleau   }}</td>
                <td class="decoupe">{{  $historique ->NB_decoupe  }}</td>
                <td class="Action">
                    <form method="POST" action="{{ route('historique.destroy', $historique->id) }}" method="post">
                    @csrf 
                    @method('DELETE')                            
                    <button type="submit" class="btn btn-danger alldelete" data-url=""> <img class="uk-border-circle" src="{{  Vite::asset('resources/images/delete.svg')}}" alt=""  width="30" height="30" alt="Border circle"></button>
                    </form>                       
                </td>
            </tr>      
        @endforeach
        </tbody>
      </table>
</div>
@endsection