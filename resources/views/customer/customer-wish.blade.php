@extends('glob.customer')

@section('content-customer')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">My Wishlist</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">My Wishlist</li>
              </ul>
            </div>
          </div>
        </div>
</div>

<div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-9">
              <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <div class="row products">
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail1"><img src="img/beras5kg.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Beras 5Kg</a></h3>
                      <p class="price">Rp. 25.000</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/beras10kg.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">Beras10kg</a></h3>
                      <p class="price">
                        <del>Rp. 50.000</del> Rp. 45.000
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection