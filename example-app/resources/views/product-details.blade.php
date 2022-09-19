@extends('layout')
@section('content')


        <h2>{{$db->name}}</h2>
        <br>
        <div class="m-2  ">
            <div class="d-flex gap-3 mb-2 text-dark ">
                <img src="{{$db-> image}}" width="300" alt="">
                <div class="flex-column-reverse pt-5">
                    <br>
                    <p>Prix: {{$db->price}} €</p>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
            <br>




@endsection


