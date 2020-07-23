@extends('layouts.master')
@section('title','Home')
@section('content')
<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(http://3.20.207.217/assets/landing/vv.gif);">
                <div class="container h-full">
                
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(http://3.20.207.217/assets/landing/j.jpg);">
                <div class="container h-full">
                    
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(http://3.20.207.217/assets/landing/n.jpg);">
                <div class="container h-full">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg0 p-b-10">
    <div class="container">
        <div class="row" id="example2">
            <div class="col-md-8">
                <p class="text-center" style="padding: 15px;color:black;">GET YOUR DAILY SAUCE FROM YOUR FAVORITE MODELS ONLINE</p>
            
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <button style="border-radius: 50px;
                    background-color: #03a9f4;
                    padding: 15px 20px;
                    color: #fff">Become a Fan</button>
                    <button style="border-radius: 50px;
                    background-color: #b29700;
                    padding: 15px 20px;
                    color: black;">Become a Model</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product -->
<section class="bg0 p-t-50 p-b-80">
    <div class="container">
        
        <div class="p-b-35 text-center">
            <h3 class="ltext-103 cl5" style="color:#FFB6C1;">
				All Models
			</h3>
        </div>

        <div class="row isotope-grid">
            @forelse ($allModels as $model)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="uploads/models/2020/03/13/image-large-1-800x600.png" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Chat Me
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ ucfirst($model->firstName) }}
                            </a>
                            <a href="" class="stext-105 cl3">
                                {{ $model->username }}
                            </a>
                           
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="home_assets/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="home_assets/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <p>No users</p>
            @endforelse

            
        </div>
        <!-- Load more -->
        <!-- <div class="flex-c-m flex-w w-full p-t-15">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div> -->
    </div>
</section>
@endsection