@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Ajouter Banque</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('enregistrer.banque') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Numero Banque</label>
                <input type="number" name="num_compte" class="form-control">
                <label for="">Nom Banque</label>
                <input type="text" name="nom_banque" class="form-control">
            </div>
            <br>
            <br>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>

  <h4 class="text-center mt-4">Liste des Banques</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom Banque</th> <th> Numero Compte</th>
      </tr>

      @foreach ($banque as $b )
      <tr>
          <td>{{ $b->id }}</td>
          <td>{{ $b->nom_banque }}</td>
          <td>{{ $b->num_compte }}</td>

          <td>
              <a href="{{ route('supprimer.banque',$b->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('editer.banque',$b->id) }}" class="btn btn-warning">Edit</a>

          </td>

          
      </tr>
      @endforeach
  </table>
@endsection

