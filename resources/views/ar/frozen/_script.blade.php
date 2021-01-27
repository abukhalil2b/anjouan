<script>

	var cartValue = document.getElementById('cartValue');
	var arrowUp = document.getElementById('arrowUp');
	var arrowDown = document.getElementById('arrowDown');
	var quantity = document.getElementById('quantity');
	var addBtn = document.getElementById('addBtn');
	var number=0;
	var total=5;
	arrowUp.addEventListener('click',()=>{
		number = parseInt(quantity.value);
		total = number + 1;
		quantity.value = total;
	})
	arrowDown.addEventListener('click',()=>{
		number = parseInt(quantity.value);
		if(number!==5){
			total =  number - 1;
			quantity.value = total;
		}

	})
	addBtn.addEventListener('click',()=>{
		console.log(cartValue.innerHTML = total)
	})

	//select product
	var select1 =  document.getElementById('select1');
	select1.addEventListener('click',(e)=>{
		var elem = document.getElementById('productImg');
		elem.src = e.target.src

	})

	var select2 =  document.getElementById('select2');
	select2.addEventListener('click',(e)=>{
		var elem = document.getElementById('productImg');
		elem.src = e.target.src
	})

	var select3 =  document.getElementById('select3');
	select3.addEventListener('click',(e)=>{

		var elem = document.getElementById('productImg');
		elem.src = e.target.src
	})
</script>