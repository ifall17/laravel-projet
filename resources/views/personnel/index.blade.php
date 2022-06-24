@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Ajouter Personnel</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('enregistrer.personnel') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Numero Passport</label>
                <input type="text" name="num_pass" class="form-control">
                <label for="">Numéro Mobile</label>
                <input type="number" name="mob" class="form-control">
                <label for="">Date de Naissance</label>
                <input type="date" name="naiss" class="form-control">
                <label for="">Civilité</label>
                <input type="text" name="civ" class="form-control">
                <label for="">Sexe</label>
                <input type="text" name="sex" class="form-control">
                <label for="">Adresse</label>
                <input type="text" name="adr" class="form-control">
                <br>
                <br>
                <select class="form-select" aria-label="Default select example" name= "ville">
                @foreach ($ville as $v )
  
  <option value="{{ $v->id }}" >{{ $v->nom_table }}</option>
  @endforeach
  </select>
  <br>
  <br>
  <select class="form-select" aria-label="Default select example" name= "banque">
                @foreach ($banque as $b )
  
  <option value="{{ $b->id }}" > {{ $b->nom_banque }}</option>
  @endforeach
</select>
<br>
<br>
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>




<h4 class="text-center mt-4">Liste des villes</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Numero Passeport</th> <th>Mobile</th> <th>Date de Naissance</th>
          <th>Civilite</th> <th>Sexe</th> <th>Addresse</th> <th>ID Ville</th> <th>ID Banque</th>
      </tr>

      @foreach ($perso as $p )
      <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->passport }}</td>
          <td>{{ $p->mobile }}</td>
          <td>{{ $p->naiss }}</td>
          <td>{{ $p->sexe }}</td>
          <td>{{ $p->address }}</td>
          <td>{{ $p->ville_id }}</td>
          <td>{{ $p->banque_id }}</td>
          
          <td>
              <a href="{{ route('supprimer.personnel',$p->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('editer.personnel',$p->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>

@endsection
