
@foreach($products as $product)


    <br>
    <div class="m-2  ">
        <div class="d-flex gap-3 mb-2 text-dark ">
            <img src="{{$product-> image}}" width="300" alt="">
            <div class="flex-column-reverse pt-5">
                <br>
                <p>Prix: {{$product->price}} €</p>
            </div>
        </div>
    </div>
@endforeach
