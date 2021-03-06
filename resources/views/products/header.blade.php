<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/products/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/products/mobile-style.css')}}">
</head>
<body>

<div class="header">
	<div class="tp-navbar">
		<div class="tp-navbar-btn-container">
			<div class="tp-navbar-btn mt-4">
				<div class="round5outer"><div class="round5inner"><span>منتجاتنا</span></div></div>
				<div class="round4outer"><div class="round4inner"><span>الإنتاج</span></div></div>
				<div class="round3outer"><div class="round3inner"><span>المتجر</span></div></div>
				<div class="round2outer"><div class="round2inner"><span>اتصل بنا</span></div></div>
				<div class="lang">English</div>
			</div>
			<div class="cart-img mt-3">
				<img src="{{asset('img/cart/green.png')}}" alt="">
				<div id="cartValue" >0</div>
			</div>
			<img class="arrow-righ mt-3" src="{{asset('img/icons/arrow-right.png')}}" alt="arrow">
		</div>
		<div class="logo">
			<img src="{{asset('img/logo/green.png')}}" alt="logo">
		</div>
	</div>
</div>

<div class="mobile-header">
	<img class="cart" src="{{asset('img/icons/cart-white.png')}}" alt="">
	<img class="logo" src="{{asset('img/logo/green-footer.png')}}" alt="">
	<img id="hum" class="hum" src="{{asset('img/icons/hum.png')}}" alt="">
</div>

<div class="mobile-header-icons-grid">
	<div class="mobile-header-arrow-right">
		<img class="mobile-arrow-icon" src="{{asset('img/icons/arrow-right.png')}}" alt="">
	</div>

	<div class="mobile-header-download-green">
		<img class="mobile-download-icon" src="{{asset('img/icons/download/green.png')}}" alt="">
		<span class="mobile-download-txt">تحميل المعلومات</span>
	</div>

</div>