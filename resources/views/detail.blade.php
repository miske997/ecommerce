@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-detail" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <h1>{{$product['name']}}</h1>
            <h2>Price: {{$product['price']}}</h2>
            <h3>Details: {{$product['description']}}</h3>
            <h4>Category: {{$product['category']}}</h4>
            <br><br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
    <br>
    <a class="btn btn-dark" href="/">Go Back</a>
</div>

@endsection