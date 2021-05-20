@extends('welcome')

@section('content')
<div style="margin-top: 1%;" class="container custom-product">
      <div class="trending-wrap">
        <h3 class="textt">My Orders</h3>
        @foreach ($orders as $item)
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
                    <h2>Name: {{$item->name}}</h2>
                    <h4>Delivery Status: {{$item->status}}</h4>
                    <h4>Address: {{$item->address}}</h4>
                    <h4>Payment Status: {{$item->payment_status}}</h4>
                    <h4>Payment Method: {{$item->payment_method}}</h4>

                </div>
            </div>
            <hr>
        </div>
        @endforeach
      </div>
</div>

@endsection