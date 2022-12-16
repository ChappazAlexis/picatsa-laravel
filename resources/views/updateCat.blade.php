<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif 

<div class="card text-center m-5" style="width: 50em;">

<h1>Editer le chat</h1>

<form action="{{route('cats.update', $cat->id)}}" method="POST" class="form-group">
    @csrf
    @method('PUT')
        <div class="form-group m-3">
          <label for="legend">Legende </label>
          <input class="form-control" type="text" name="legend" id="legend" value="{{$cat->legend}}" required>
        </div>

        <div class="form-group m-3">
            <label for="description">Description </label>
            <input class="form-control" type="text" name="description" id="description" value="{{$cat->description}}" required>
          </div>
    
        <div class="form-group m-3">
          <label for="url">URL de l'image</label>
          <input class="form-control" type="text" name="url" id="url" value="https://cataas.com/cat" required>
        </div>

          <div class="form-group m-3">
            <label for="statut">Statut</label>
            <select class="form-control" id="statut" name="statut" value="{{$cat->statut}}" required>
              <option>0</option>
              <option>1</option>
            </select>
          </div>
    
        <div class="form-group m-3">
          <input class="btn btn-primary form-control" type="submit" value="MàJ!">
          <a style="width: 48em;" class="btn btn-info" href="/cats">Retour</a>
        </div>
      </form>
    </div>