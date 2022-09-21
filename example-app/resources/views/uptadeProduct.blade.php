@extends('layout_back')

@section('content')

<p>modifier un produit</p>
<div class="d-flex justify-content-center">
    <form action="/backoffice/{{$product->id}}" method="post">
        @method('put')
        @csrf
        <div class="border border-dark p-2">
            <div class="form-group">
                <label for="formGroupExampleInput2">Nom</label>
                <input type="text"value="{{$product->name}}" name="name" class="form-control" id="name">
                <small id="textHelp" class="form-text text-muted">Nom</small>
            </div>
            <br>
            <div class="form-group">
                <label for="formGroupExampleInput2">Prix</label>
                <input type="number" value="{{$product->price}}" name="price" class="form-control" id="price">
                <small id="numberHelp" class="form-text text-muted">prix</small>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input type="file" value="{{$product->image}}" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Modifer le Produit</button>
        </div>
    </form>
</div>
@endsection
