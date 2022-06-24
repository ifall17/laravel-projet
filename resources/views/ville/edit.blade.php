@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editer   {{ $ville->nom_table }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('maj.ville',$ville->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom Ville</label>
                <input type="text" name="nom_ville" class="form-control" value="{{ $ville->nom_table }}">
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection