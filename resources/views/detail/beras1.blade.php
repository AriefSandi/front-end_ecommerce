@extends('glob.home')

@section('content-menu')
<div class="col-lg-9">
              <p class="lead">Beras 5kg</p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="img/beras5kg.jpg" alt="" class="img-fluid"></div>
                    <div> <img src="img/beras5kg.jpg" alt="" class="img-fluid"></div>
                    <div> <img src="img/beras5kg.jpg" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                      <p class="price" name="harga" name="harga" value="25000">Rp. 25.000</p>
                      <p class="text-center">
                        <a href="cart" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></a>
                      </p>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="img/beras5kg.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/beras5kg.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/beras5kg.jpg" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Product details</h4>
                <p>Beras unggulan</p>
                <h4>Berat dan Ukuran</h4>
                <ul>
                  <li>Ukuran : 30x40 cm</li>
                  <li>Berat : 5kg</li>
                </ul>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Masukin quote berasnya coy, males mikir wkwk </em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Show it to your friends</h4>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>Produk yang mungkin anda suka</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/beras10kg.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Beras 10kg</a></h3>
                      <p class="price">Rp. 50.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection