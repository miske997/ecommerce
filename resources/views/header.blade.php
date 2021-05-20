<?php 
 use App\Http\Controllers\ProductController;
 $total=ProductController::cartItem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <h3><a class="navbar-brand" href="/">Home</a></h3>
        </li>
        <li class="nav-item active">
            <h3><a class="navbar-brand" href="/myorders">Orders</a></h3>
          </li>
        
        <form action="/search" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" style="width: 500px;" type="text" name="query" placeholder="Search..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      <li class="nav-item">
        <h3><a class="navbar-brand" href="/cartlist">&nbsp; Chart({{$total}})</a></h3>
      </li>
    </ul>
    </div>
  </nav>