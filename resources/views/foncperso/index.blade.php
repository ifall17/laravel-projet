@extends('welcome')

@section('contenue')


@extends('layouts.app')

@section('content')
@endsection
<div class="container">    
            <br />
            <h1 class="text-center text-primary">Fonction de chaque personnel</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Personnel</th>
                            <th>Fonction</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $d->passport }}</td>
                                <td>{{ $d->nom_fonction }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>








@endsection