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
<section class="bg0 p-t-50 p-b-145">
    <div class="container">
        
        <div class="p-b-10 text-center">
            <h3>
                Chat with our Live <span style="color:#FFB6C1;">Model Now</span>
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            
            <div class="flex-w flex-l-m filter-tope-group m-tb-10 ml-auto" style="float:center;">
                <!-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button> -->
                
                <input size="38" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" type="text" placeholder="Search 1000+ Daily Sauce of Our Models" style="margin:0px 5px;">
                
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".recently-added" style="margin:0px 5px;">
                    Recently Added
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".most-followed" style="margin:0px 5px;">
                    Most Followed
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".featured-sauce"  style="margin:0px 5px;">
                    Featured Sauce
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".monthly-stars" style="margin:0px 5px;">
                    Monthly Stars
                </button>

            </div>
        </div>

        <div class="row isotope-grid">
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40 online-models">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
        </div>

        <div class="row isotope-grid">
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 isotope-item recently-added p-b-40">
                <div class="row" style="background-image: url('home_assets/images/nathan.png');
                margin: 0px;
                background-repeat: no-repeat;">
                    <div class="col-sm-4 float-right" style="padding-left: 100px;
                    padding-top: 20px;
                    padding-bottom: 20px;">
                        <img src="home_assets/images/nathan1.png" alt="" style="width: 75px;">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right;">
                                <p>Followers <br> <span style="font-size:18px;font-weight: 600;">456</span></p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px;">
                            <div class="col-sm-12" style="padding: 0 55px;">
                                <p><strong>username</strong></p>
                                <p>1 hour ago</p>
                                <p>Your bio goes here... and here too.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-1" style="text-align:right;">
                                <p style="color:#f49ac1">Featured</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                        font-weight: 600;">
                        <i class="fa fa-envelope"></i>   Chat Me</button>
                    </div>
                    <div class="col-sm-6" style="background-color: #f49ac1;
                    border: 1px solid #f49ac1;
                    text-align: center;
                    -webkit-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: -2px -2px 5px 0px rgba(0,0,0,0.75);">
                        <button class="btn" style="color: white;
                                                    font-weight: 600;">
                        <i class="fa fa-heart"></i>  Get MySauce</button>
                    </div>
                </div>					
            </div>
        </div>
        <!-- Load more -->
        <!-- <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div> -->
        
        <div class="row p-t-45">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="cl2 p-b-16">
                        Get your Daily <span style="color:#FFB6C1;"> Sauce </span> & <span style="color:#FFB6C1;">Happiness</span>
                    </h3>

                    <h3 class="cl2 p-b-16">
                        Here!!
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
                    </p>


                    <p class="stext-113 cl6 p-b-26">
                        Want to be a model? <a href="#" style="color:#FFB6C1; text-decoration: underline;"> Sign Up here</a>
                    </p>

                    <h3 class="cl2 p-b-16">
                        Get this Benefits with you, Being one of our Models
                    </h3>

                    
                    <div class="flex-w w-full p-b-10">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-star"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Unlimited Income
                            </span>

                            <p class="stext-113 cl6 p-b-26">
                                <span style="color:#FFB6C1;">Get 70% of commision</span> The more your create contents, the more passive income you have
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-10">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-star"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Live Streaming Support 
                            </span>

                            <p class="stext-113 cl6 p-b-26">
                                <span style="color:#FFB6C1;">Get 70% of commision</span> The more your create contents, the more passive income you have
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-10">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-star"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Communicate with Fans
                            </span>

                            <p class="stext-113 cl6 p-b-26">
                                <span style="color:#FFB6C1;">Get 70% of commision</span> The more your create contents, the more passive income you have
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-10">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-star"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Sell Your Contents
                            </span>

                            <p class="stext-113 cl6 p-b-26">
                                <span style="color:#FFB6C1;">Get 70% of commision</span> The more your create contents, the more passive income you have
                            </p>
                        </div>
                    </div>
                    

                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="home_assets/images/about-01.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection