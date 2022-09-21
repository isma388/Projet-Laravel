@extends('layout_back')
@section('content')

    <div class="d-flex justify-content-center mt-5">
        <a type="button" href="/backoffice/products/addProduct" class="btn btn-sm btn-outline-secondary">Ajouter un produit</a>
    </div>
    <div class="container d-flex flex-row flex-wrap gap-5 mt-5 ">
        @foreach($products as $product)

            <div class="card p-3" style="width: 18rem;">
                <p class="card-text">{{$product-> name}}</p>
                <img src="{{$product->image}}">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group gap-2 ">
                            <a style="height: 30px" type="button"  href="/backoffice/products/uptade/{{$product->id}}}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                          <form method="post" action="/backoffice/{{$product->id}}/delete">
                              @method('delete')
                              @csrf
                              <button class="btn btn-sm btn-outline-secondary">Supprimer</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

