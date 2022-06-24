@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Ajouter Ville</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('enregistrer.ville') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom Ville</label>
                <input type="text" name="nom_ville" class="form-control">
            </div>
            <br>
            <br>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>

  <h4 class="text-center mt-4">Liste des villes</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom Ville</th>
      </tr>

      @foreach ($ville as $v )
      <tr>
          <td>{{ $v->id }}</td>
          <td>{{ $v->nom_table }}</td>
          <td>
              <a href="{{ route('supprimer.ville',$v->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('editer.ville',$v->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>
@endsection


