@extends('welcome')

@section('content')
<div style="margin-top: 1%;" class="container custom-product">
      <div class="trending-wrap">
        <h3 class="textt">Cart List</h3>
        @foreach ($products as $item)
        <div class="search-item">
            <div class="col-sm-5">
                <div class="">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h4>{{$item->description}}</h4>
                </div>
            </div>
            <div class="col-sm-5">
                <a href="/removeCart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
            </div>
            <hr>
        </div>
        @endforeach
        <br><br><br>
        <a class="btn btn-success" href="ordernow">Order Now</a>
      </div>
</div>

@endsection