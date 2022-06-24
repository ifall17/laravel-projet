@extends('welcome')

@section('contenue')
<div>
@extends('layouts.app')

@section('content')
@endsection
<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Ajouter Fonction</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('enregistrer.fonction') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom Fonction</label>
                <input type="text" name="nom_fonc" class="form-control">
            </div>
            <br>
            <br>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>

  <h4 class="text-center mt-4">Liste des Fonction</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom Fonction</th>
      </tr>

      @foreach ($fonc as $f )
      <tr>
          <td>{{ $f->id }}</td>
          <td>{{ $f->nom_fonction }}</td>
          <td>
              <a href="{{ route('supprimer.fonction',$f->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('editer.fonction',$f->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>
@endsection


