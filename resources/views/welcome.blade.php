@extends('layouts.main')

@section('content')
<div class="overlay">
	<div class="tp-navbar">
		<div class="tp-navbar-btn-container">
			<div class="tp-navbar-btn mt-4">
				<a href="{{route('products.all')}}">
					<div class="round5outer"><div class="round5inner"><span>منتجاتنا</span></div></div>
				</a>

				<a href="">
					<div class="round4outer"><div class="round4inner"><span>الإنتاج</span></div></div>
				</a>

				<a href="">
					<div class="round3outer"><div class="round3inner"><span>المتجر</span></div></div>
				</a>

				<a href="">
					<div class="round2outer"><div class="round2inner"><span>اتصل بنا</span></div></div>
				</a>

				<a href="">
					<div class="lang">English</div>
				</a>
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

	<img class="bg" src="{{asset('img/welcome/bg1.png')}}" alt="">
</div>


<center class="title">الإختيار الأفضل لعائلتك</center>
<div class="best">
	<img class="best1" src="{{asset('img/welcome/best/1.png')}}" alt="">
	<img class="best2" src="{{asset('img/welcome/best/2.png')}}" alt="">
	<img class="best1" src="{{asset('img/welcome/best/1.png')}}" alt="">
</div>

<center class="text-divider title">الوصفات</center>
<div class="recipes">
	<img class="recipes1" src="{{asset('img/welcome/best/p1.png')}}" alt="">
	<img class="recipes2" src="{{asset('img/welcome/best/p2.png')}}" alt="">
	<img class="recipes1" src="{{asset('img/welcome/best/p1.png')}}" alt="">
</div>

<div class="footer">
	<img src="{{asset('img/logo/green-footer.png')}}" alt="">
	<div class="social">
		<a href="">
			<img src="{{asset('img/social/face.png')}}" alt="">
		</a>
		<a href="">
			<img src="{{asset('img/social/inst.png')}}" alt="" >
		</a>
		<a href="">
			<img src="{{asset('img/social/twitter.png')}}" alt="">
		</a>

	</div>
	<span class="copyright">جميع الحقوق محفظة&copy</span>
</div>

@endsection