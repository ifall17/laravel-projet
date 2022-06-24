@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editer   {{ $perso->passport }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('maj.personnel',$perso->id) }}" method="post">
            @csrf
            <div class="form-group">
            <label for="">Numero Passport</label>
                <input type="text" name="num_pass" class="form-control" value = "{{$perso-> passport}}">
                <label for="">Numéro Mobile</label>
                <input type="number" name="mob" class="form-control" value = "{{$perso-> mobile}}">
                <label for="">Date de Naissance</label>
                <input type="date" name="naiss" class="form-control" value = "{{$perso-> naiss}}">
                <label for="">Civilité</label>
                <input type="text" name="civ" class="form-control" value = "{{$perso-> civilite}}">
                <label for="">Sexe</label>
                <input type="text" name="sex" class="form-control" value = "{{$perso-> sexe}}">
                <label for="">Adresse</label>
                <input type="text" name="adr" class="form-control" value = "{{$perso-> address}}">
                <select class="form-select" aria-label="Default select example" name= "ville">
            @foreach ($ville as $v)
  <option value="{{ $v->id }}" >{{ $v->nom_table }}</option>
  @endforeach
  </select>
  <select class="form-select" aria-label="Default select example" name= "banque">
                @foreach ($banque as $b)
  
  <option value="{{ $b->id }}" > {{ $b->nom_banque }}</option>
  @endforeach
</select>
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection