@extends('layouts.app')
@section ('content')


<h2 class="ms-5 me-5 mt-5">Gestion des chats <a class="btn btn-success" href="{{route('cats.create')}}">Ajouter</a></h2>
            <table class="table ms-5 me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Légende</th>
                  <th scope="col">Détail</th>
                  <th scope="col">Editer</th>
                  <th scope="col">Supprimer</th>
                </tr>
              </thead>
              <tbody>

    @foreach ($cats as $cat)
           
                <tr>
                  <th scope="row">{{$cat -> id}}</th>
                  <td>{{$cat -> legend}}</td>
                  <td><a class="btn btn-primary" href="{{route('cats.show', $cat->id),}}">Détail</a></td>
                  <td><a class="btn btn-warning" href="{{route('cats.edit', $cat->id),}}">Editer</a></td>
                  <td>
                    <form action="{{route('cats.destroy', $cat->id),}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                  </td>
                </tr>
            
        @endforeach

    </tbody>
</table>

@endsection