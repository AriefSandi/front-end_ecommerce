@extends('glob.global')

@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Order Review</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Checkout - Order Review</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="checkout1" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="checkout2" class="nav-link"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="checkout3" class="nav-link"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="checkout4" class="nav-link active"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/beras5kg.jpg" alt="White Blouse Armani"></a></td>
                          <td><a href="#">Beras 5kg</a></td>
                          <td>1</td>
                          <td>25000</td>
                          <td>0</td>
                          <td>25000</td>
                        </tr>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th>25000</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="checkout3" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to payment method</a></div>
                  <div class="right-col">
                    <a href="/" class="btn btn-template-main">Place the order<i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection