@extends('layout')

@section('content')
    <div class="m-2  ">
        <div class="d-flex gap-3 mb-2 text-dark ">

            <img src="" width="300" alt="">
            <div class="flex-column-reverse">
                <h3></h3>
                <br>
                <p>Prix : </p>
                <p> Prix HT :</p>
                <p> Prix en soldes : </p>
            </div>


        </div>
        <br>
        <div class="start-50">
            <form action="cart.php" method="post">
                <label>
                    <input type="number" name="quantité" value="0" min="1">
                    <input type="hidden"  name="valeur" value="">
                </label>
                <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
            </form>
            <div class="d-flex flex-column mt-4">

            </div>
        </div>
@endsection





































<!-- CSS only -->
