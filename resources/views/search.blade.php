@extends('welcome')

@section('content')
<div style="margin-top: 1%;" class="container custom-product">
      <div class="trending-wrap">
        <h3 class="textt">Result for Products</h3>
        @foreach ($products as $item)
        <div class="search-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}" alt="Image">
            <div>
              <h2>{{$item['name']}}</h2>
              <h4>{{$item['description']}}</h4>
            </div>
          </a>
        </div>
        @endforeach
      </div>
</div>

@endsection