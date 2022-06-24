@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editer   {{ $fonc->nom_fonction }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('maj.fonction',$fonc->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom Fonction</label>
                <input type="text" name="nom_fonc" class="form-control" value="{{ $fonc->nom_fonction }}">
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection