@extends('welcome')

@section('content')
<div style="margin-top: 1%;" class="container custom-product">
      <div class="trending-wrap">          
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <br>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <h4>Address: </h4>
                  <textarea name="address" class="form-control" placeholder="Enter Your Adress"> </textarea>
                    <hr>
                </div>
                <div class="form-group">
                  <label for="pwd"><h2>Payment Method</h2></label><hr>
                  <span><h4>Online Payment</h4></span><input type="radio" class="form-control" name="payment" value="cash"> <hr>
                  <span><h4>Payment on Delivery</h4></span><input type="radio" class="form-control" name="payment" value="cash"><hr>
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
      </div>
</div>

@endsection