@extends('layouts.master')
@section('title','Home')
@section('content')
<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
      <div class="row">
        <div class="order-md-2 col-md-6 col-lg-6 p-b-30">
          <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
            <div class="p-lr-50 p-t-30 p-b-70 p-lr-15-lg w-full-md">
              <div class="card"
                style="box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);transition: 0.3s;padding:20px; padding-left: 50px;padding-right: 50px;">
                <form>
                  <div style="width:100%; text-align:center">
                    <img src="home_assets/images/product-min-01.jpg" class="p-b-26" alt="PRODUCT">
                  </div>

                  <p class="stext-109 cl6 txt-center p-b-26">
                    Connect Privately with Models, Influencers and <br />
                    Content Creators
                  </p>

                  <div class="bor8 m-b-20 how-pos4-parent">
                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 login"
                      style="background-color: rgba(211,211,211);" type="text" name="email" placeholder="Email Address">
                    <img class="how-pos4 pointer-none" src="home_assets/images/icons/icon-envelope.png" alt="ICON">
                  </div>

                  <div class="bor8 m-b-20 how-pos4-parent">
                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 login"
                      style="background-color: rgba(211,211,211);" type="text" name="email" placeholder="Password">
                    <img class="how-pos4 pointer-none" src="home_assets/images/icons/icon-password.png" alt="ICON">
                  </div>
                  <div class="p-b-15">
                    <button style="background-color: #f49ac1;"
                      class="flex-c-m stext-101 cl0 size-121 bg3 hov-btn3 p-lr-15 trans-04 pointer">
                      Submit
                    </button>
                  </div>

                  <div class="txt-center">
                    <a class="stext-109 cl6 txt-center" style="text-decoration:underline;color: #f49ac1; ">
                      Forgot Password?
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="order-md-1 col-11 col-md-6 col-lg-6 m-lr-auto p-b-30">
          <div class="how-bor2">
            <div class="hov-img0">
              <img src="home_assets/images/about-02.jpg" alt="IMG" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection