@extends('layout_back')

@section('content')
    <p>Ajouter un élément</p>

    <div class="d-flex justify-content-center">
    <form action="/backoffice" method="post">
        {{csrf_field()}}
       <div class="border border-dark p-2">
        <div class="form-group">
            <label for="formGroupExampleInput2">Nom</label>
            <input type="text" name="name" class="form-control" id="name">
            <small id="textHelp" class="form-text text-muted">Ajouter le Nom</small>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prix</label>
            <input type="number" name="price" class="form-control" id="price">
            <small id="numberHelp" class="form-text text-muted">Ajouter le prix</small>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1"></label>
            <input type="file"  name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter le Produit</button>
       </div>
    </form>
    </div>

@endsection
