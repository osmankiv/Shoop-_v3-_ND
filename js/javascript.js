let i = 0;
//==============================================================================================
// fetch data with AJAX tikink
// i try find tha solution of relode my page averwhen i "GIT" or "POSt" data with srever by php
//==============================================================================================


//==============================================================================================


function add_cart(id) {


	let item = document.getElementById(id);

	let item_name = document.getElementById('item_name' + id + '').innerHTML;  //item name
	let item_sell = document.getElementById('item_sell' + id + '').innerHTML;// item seel
	let image0 = document.getElementById('image0').innerHTML;//item img 




	if (id != null) {// x = id item in databes
		/////////// add num of item in the cart/////
		let acartnum = document.getElementById('cart_num');
		i++;//	acartnum.innerHTML=i;
		acartnum.setAttribute('value', i);
		//////////////add items in the cart [ craate options}//////////
		let itemcart = document.querySelector('.heading1');
		let itemscart = document.createElement('option');
		heading1.appendChild(itemscart);
		/////////end of craate options /////
		//////add name and seel and imd in option carts///

		itemscart.innerHTML = item_name + '--' + item_sell + '' + image0;			  // option contant
		//===========================
		let total = 1;
		total = total + Number(item_sell);
		// total contant


		//===========================
	}
	else (

		alert('sorry cant add the itme now :( ----- id =' + id)
	)
	let find_tha_messag = document.querySelector('#add_messeg');
	find_tha_messag.setAttribute('style', 'display: block;');
	setTimeout(
		function () {
			hide(find_tha_messag);
		}, 1000);
	function hide(find_tha_messag1) {
		find_tha_messag1.setAttribute('style', 'display: none;');


		////////// end add items in the cart [//////////
	}
	function buy() {

	}


}
//===================================
// post  data with XMLHTTPRequest	
// fetch data with XMLHTTPRequest	
//===================================
function fetch_data() {
	//post
	let dtaa_search_box = document.querySelector('#search_box').value;
	let pxhr = new XMLHttpRequest();// 'XMLHttpRequest' ينشئ كائن  
	pxhr.open('POST', 'data_indx.php?id=' + dtaa_search_box + '');
	pxhr.setRequestHeader('Content-Type', 'application/json')
	let data = {
		heading: '' + dtaa_search_box + ''

	};
	pxhr.send(JSON.stringify(data));// send data of the search box
	pxhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (pxhr.readyState === 4 && pxhr.status === 200) {
			console.log('done send data');
			//	window.location.href = 'data_indx.php?id='+dtaa_search_box+'';

		}
	};
	//post
	/*	fetch("data_indx.php", {
			method: 'POST',
			body: JSON.stringify(
				{
					id: dtaa_search_box
				}
			)
		})
			.then(response => response.json())
			.then(data => console.log(data))
			.then(data => {
				if (data.redirect) {
					window.location.href = 'data_indx.php';
	
				}
			});
	
	
		let url = new URL('data_indx.php');
		url.searchParams.append('dtaa_search_box', dtaa_search_box);
		let link = url.href;
		console.log(link);
	*/

	//fetch

	let xhr = new XMLHttpRequest(); //  	'XMLHttpRequest' ينشئ كائن  
	xhr.open('GET', 'data_indx.php?id=' + dtaa_search_box + ''); // يفتح طلب HTTP. أول معلمة هي طريقة الطلب ("GET" في هذه الحالة). المعلمة الثانية هي عنوان URL للطلب.
	xhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (xhr.readyState === 4 && xhr.status === 200) {

			let response = JSON.parse(xhr.responseText);
			console.log(response);			
			let disply_search_resalt = document.querySelector('#disply_search_resalt');
			let items_option = document.createElement('option');
			disply_search_resalt.appendChild(items_option);
			items_option.innerHTML = response.heading;
			//dtaa_search_box.value = response.heading;



		}
	};

	xhr.send();//

}
//===================================
let text = localStorage.getItem("OsmanDataAsJSON");
let obj = JSON.parse(text);
let copy_riten = document.getElementById("copy_riten");
//copy_riten.innerHTML = obj.name;


