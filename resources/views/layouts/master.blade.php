<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('home_assets/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('home_assets/css/style.css') }}">
<!--===============================================================================================-->

 <!-- Global stylesheets -->
 <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('sub_assets/css/bootstrap.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('sub_assets/css/bootstrap_limitless.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('sub_assets/css/layout.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('sub_assets/css/components.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('sub_assets/css/colors.min.css' ) }}"
      rel="stylesheet"
      type="text/css"
    />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets/js/plugins/visualization/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/fullcalendar/core/main.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js') }}"></script>

    <script src="{{ asset('sub_assets/js/app.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/user_pages_profile.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/echarts/light/bars/tornado_negative_stack.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/profile/light/balance_stats.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/profile/light/available_hours.js') }}"></script>
</head>
<body class="animsition">
	@include('home.header')
        @yield('content')
    @include('home.footer')

<!--===============================================================================================-->	
	<script src="{{ asset('home_assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('home_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('home_assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('home_assets/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "Successfully Followed!", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('home_assets/js/main.js') }}"></script>

</body>
</html>
