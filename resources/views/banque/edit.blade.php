@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">

        <h4>Editer   {{ $banque->nom_banque }} ou  Numero de compte </h4>
    </div>
    <div class="card-body">
        <form action="{{ route('maj.banque',$banque->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom banque</label>
                <input type="text" name="nom_banque" class="form-control" value="{{ $banque->nom_banque }}">
                <label for="">Numero Compte</label>
                <input type="text" name="num_compte" class="form-control" value="{{ $banque->num_compte }}">
            </div>

            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection