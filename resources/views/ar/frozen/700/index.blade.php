<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>frozen</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/frozen/700/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/frozen/style.css')}}">
</head>
<body>

<div class="header">
	<div class="tp-navbar">
	<img class="cart-white" src="{{asset('img/icons/cart-white.png')}}" alt="logo">
	<img class="mobile-logo" src="{{asset('img/logo/brown-footer.png')}}" alt="logo">
	<img class="hum" src="{{asset('img/icons/hum.png')}}" alt="logo">
	<div class="tp-navbar-btn-container">
		<div class="tp-navbar-btn mt-4 mobile-links">
			@include('ar.frozen._header_links')
		</div>
		<div class="cart-img mt-3">
			<img src="{{asset('img/cart/brown.png')}}" alt="">
			<div id="cartValue" >0</div>
		</div>
		<img class="arrow-righ mt-3 mobile-arrow" src="{{asset('img/icons/arrow-right.png')}}" alt="arrow">
	</div>
	<div class="logo">
		<img class="logo-top" src="{{asset('img/logo/brown.png')}}" alt="logo">
	</div>
</div>

</div>
<div class="info-download">
	<a href="">
		<img src="{{asset('img/icons/download/brown.png')}}" alt="">
		<span>تحميل المعلومات</span>
	</a>
	</div>


	<div class="title-mobile">
		<h2> دجاج كامل مجمد بدون أحشاء

		</h2>
		<span>٨٠٠ جرام</span>
	</div>

<div class="content">
	<div class="right">
		<div class="title">
			<h2> دجاج كامل مجمد بدون أحشاء

			</h2>
			<span>٨٠٠ جرام</span>
		</div>
		<div class="add">
			<span class="quantity-title">كمية دجاج كامـل مجمد بدون أحشــاء ٨٠٠ جرام</span>
			<div class="input">
				<input type="number"  id="quantity" value="5">
				<img id="arrowUp" src="{{asset('img/icons/arrow-up.png')}}" alt="">
				<img id="arrowDown" src="{{asset('img/icons/arrow-down.png')}}" alt="">
			</div>
			<span class="price-text"><span>١٫٠٥٠</span> ريال عماني </span>
			<img id="addBtn" src="{{asset('img/add-to-cart-btn/brown.png')}}" alt="">
			<div class="nut">
				المعلومات الغذائية
			</div>
			<div class="qunt">
				متوسط الكميات لكل
				<span>١٠٠ جرام</span>
			</div>
			<div class="preserve-mobile">
				<span>ملحوظة</span> خالي من المواد الحافظة
			</div>
		</div>
	</div>

	<div class="left">
		<div class="select-list">
			<div class="select1 selects">
				<img id="select1" src="{{asset('img/frozen/700/700.png')}}" alt="">
			</div>
			<div class="select2 selects">
				<img id="select2" src="{{asset('img/frozen/700/دجاج كامل مجمد بدون أحشاء 700 جرام1.png')}}" alt="">
			</div>
			<div class="select3 selects">
				<img id="select3" src="{{asset('img/frozen/700/دجاج كامل مجمد بدون أحشاء 700جرام2.png')}}" alt="">
			</div>

		</div>

		<div class="product">
			<div class="product-img">
				<img id="productImg" src="{{asset('img/frozen/700/700.png')}}" alt="">
			</div>
			<div class="preserve">
				<span>ملحوظة</span> خالي من المواد الحافظة
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

@include('ar.frozen._show')

<div class="footer">
	<img class="footer-logo-img" src="{{asset('img/logo/brown-footer.png')}}" alt="">
	@include('ar.frozen._social')
</div>
@include('ar.frozen._script')
</body>
</html>