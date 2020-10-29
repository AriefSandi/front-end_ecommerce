@extends('glob.customer')

@section('content-customer')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">My Orders</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">My Orders</li>
              </ul>
            </div>
          </div>
        </div>
</div>
<!-- container -->

<div id="content">
        <div class="container">
          <div class="row bar mb-0">

<div id="customer-orders" class="col-md-9">
              <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <!--<th>Action</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th># 1735</th>
                        <td>29/10/2020</td>
                        <td>25000</td>
                        <td><span class="badge badge-info">Sedang disiapkan</span></td>
                        <!--<td><a href="customer-order.html" class="btn btn-template-outlined btn-sm">View</a></td>-->
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection