@extends('glob.global')

@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Payment Mehod</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Checkout - Payment Mehod</li>
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
                <form method="get" action="checkout4">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="checkout1" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="checkout2" class="nav-link"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="checkout3" class="nav-link active"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Paypal</h4>
                          <p>We like it all.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment1">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Payment gateway</h4>
                          <p>VISA and Mastercard only.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment2">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Cash on delivery</h4>
                          <p>You pay when you get it.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment3">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left-col"><a href="checkout2" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to delivery method</a></div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main">Review order<i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection