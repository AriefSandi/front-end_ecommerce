@extends('glob.global')

@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Keranjang</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Keranjang</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="POST" action="cart1">
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/beras5kg.jpg" alt="White Blouse Armani" class="img-fluid"></a></td>
                          <td><a href="#">Beras 5kg</a></td>
                          <td>
                            <input type="text" name="jumlah" value="1"  class="form-control">
                          </td>
                          <td>25000</td>
                          <td>0</td>
                          <td>25000</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">25000</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="shop-category.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right-col">
                        <div>
                            <input name="kirim" value="update" type="submit"class="btn btn-secondary">
                </form>
                        </div>
                        <div>
                          <a href="checkout1" class="btn btn-template-outlined">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                  </div>
              </div>
              
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>25000</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>10000</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>0</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>35000</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>Coupon code</h4>
                </div>
                <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection