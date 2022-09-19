@extends('layout')

@section('content')


    <br>
    @foreach($products as $product)

        <h2>{{$product-> name}}</h2>
        <br>
        <div class="m-2  ">
            <div class="d-flex gap-3 mb-2 text-dark ">

                <img src="{{$product-> image}}" width="300" alt="">
                <div class="flex-column-reverse pt-5">
                    <br>
                    <p>Prix: {{$product ->  price}} €</p>

                </div>

            </div>
            <br>
            <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>

            <br>
            <div class="start-50">
                {{--            <form action="/product/{id}" method="post">--}}
                {{--                {{ csrf_field() }}--}}
                {{--                <label>--}}
                {{--                    <input type="number" name="quantité" value="0" min="1">--}}
                {{--                    <input type="hidden"  name="valeur" value="">--}}
                {{--                </label>--}}
                {{--                <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>--}}
                {{--            </form>--}}
                <div class="d-flex flex-column mt-4">

                </div>
            </div>

    @endforeach
@endsection

