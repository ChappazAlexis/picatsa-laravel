<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="m-3">
    <h1>Detail</h1>
    
    <div class="card m-3" style="width: 18rem;">
        <img class="card-img-top" src="{{$cat -> url}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$cat -> legend}}</h5>
            <p class="card-text">{{$cat-> description}}</p>
            <p class="card-text">Statut : {{$cat-> statut}}</p>
            <p class="card-text">ID : {{$cat-> id}}</p>
        </div>
        <a class="btn btn-info" href="/cats">Retour</a>
    </div>
</div>