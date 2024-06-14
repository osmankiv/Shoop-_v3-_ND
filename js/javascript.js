let i = 0;
//==============================================================================================
// fetch data with AJAX tikink
// i try find tha solution of relode my page averwhen i "GIT" or "POSt" data with srever by php
//==============================================================================================


//==============================================================================================

let total = 0;
function add_cart(id,part) {


	let item = document.getElementById(id);

	let item_name = document.getElementById('item_name_' + part + id + '').innerHTML;  //item name
	let item_sell = document.getElementById('item_sell_' + part + id + '').innerHTML;// item seel
	let image0 = document.getElementById('image0').innerHTML;//item img 




	if (id != null) {//  id item in databes
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

		total = total + Number(item_sell);
		// total contant
		let total_num = document.querySelector('.total');
		total_num.innerHTML = "total" + "" + total;
		//alert(total);

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

}

//===================================
// post  data with XMLHTTPRequest	search_box
// fetch data with XMLHTTPRequest	search_box
//===================================

function fetch_data(data_search_box_value) {
	document.querySelector('.disply_search_resalt_select').innerHTML = "";
	//post
	//alert(data_search_box_value.length);
	if (data_search_box_value.length == 0) {
		document.querySelector('.disply_search_resalt_select').innerHTML = "";
		//.getElementsByClassName('.disply_search_resalt_select_itmes').innerHTML = "";
	}
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

	//fetch

	let xhr = new XMLHttpRequest(); //  	'XMLHttpRequest' ينشئ كائن  
	xhr.open('GET', 'data_indx.php?id=' + dtaa_search_box + ''); // يفتح طلب HTTP. أول معلمة هي طريقة الطلب ("GET" في هذه الحالة). 	المعلمة الثانية هي عنوان URL للطلب.
	xhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (xhr.readyState === 4 && xhr.status === 200) {

			let response = JSON.parse(xhr.responseText);
			console.log(response);
			//	console.log(xhr.responseText);
			let disply_search_resalt = document.querySelector('#disply_search_resalt_select');
			for (let start1 = 0; start1 < response.length - 1; start1++) { // -1 ? yes  skip tha response.recal_caont
				let items_option = document.createElement('span');
				items_option.setAttribute("value", start1);
				items_option.setAttribute("id", "items_option_styel");
				items_option.setAttribute("class", 'disply_search_resalt_select_itmes');
				//console.log(response[start1].heading);
				disply_search_resalt.appendChild(items_option);

				let ALink = document.createElement('a');

				ALink.setAttribute("href", '../../shoop v3 ND/php/f.php?id=' + response[start1].id + '&&part=' + response[start1].part);
				ALink.setAttribute("class", 'hlinks');
				items_option.appendChild(ALink);
				ALink.innerHTML = response[start1].heading;
			}

			console.log(response.recal_caont);

			//15dd in the  response.heading link of the item
			//dtaa_search_box.value = response.heading;



		}
	};

	xhr.send();//

}

function buy(name_item,part) {
	//alert(part);
	let name_iteml = document.querySelector('#item_name_' + part + name_item).innerHTML;
	//alert(name_iteml);
	//post
	let pxhr = new XMLHttpRequest();// 'XMLHttpRequest' ينشئ كائن  
	pxhr.open('POST', 'data_indx.php?id=' + name_iteml + '');
	pxhr.setRequestHeader('Content-Type', 'application/json')
	let data = {
		heading: '' + name_iteml + ''

	};
	pxhr.send(JSON.stringify(data));// send data of the search box
	pxhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (pxhr.readyState === 4 && pxhr.status === 200) {
			console.log('done send data of bay funtion');

		}
	};
	//fetch

	let xhr = new XMLHttpRequest(); //  	'XMLHttpRequest' ينشئ كائن  
	xhr.open('GET', 'data_indx.php?id=' + name_iteml + ''); // يفتح طلب HTTP. أول معلمة هي طريقة الطلب ("GET" في هذه الحالة). 	المعلمة الثانية هي عنوان URL للطلب.
	xhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (xhr.readyState === 4 && xhr.status === 200) {

			let response = JSON.parse(xhr.responseText);
			console.log(response);
			for (let start1 = 0; start1 < response.length - 1; start1++) { // -1 ? yes  skip tha response.recal_caont

				window.location.href = '../../shoop v3 ND/php/f.php?id=' + response[start1].id + '&&part=' + response[start1].part;
			}

		}
	};

	xhr.send();//


}


//==================================
//
//uplode_tha_user_loction
//
//==================================
function uplode_tha_user_loction(user_id) {



	//post
	let user_location = document.querySelector('#floatingSelect').value;
	let user_id_l = user_id;
	let pxhr = new XMLHttpRequest();// 'XMLHttpRequest' ينشئ كائن  
	pxhr.open('POST', 'php/add_user_location_dlevaring,php.php?id=' + user_id_l + '&user_location=' + user_location + '');
	pxhr.setRequestHeader('Content-Type', 'application/json')
	let data =
	{
		heading: '' + user_id_l + ''

	};
	pxhr.send(JSON.stringify(data));// send_tha_user_loction
	pxhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if (pxhr.readyState === 4 && pxhr.status === 200) {
			console.log('done update user loction');
			//	window.location.href = 'php/add_user_location_dlevaring,php.php?id=' + user_id_l + '&user_location=' + user_location_l+'';

		}
	};
	alert(user_id);

	buy(user_id_l);
}




//===================================
let text = localStorage.getItem("OsmanDataAsJSON");
let obj = JSON.parse(text);
let copy_riten = document.getElementById("copy_riten");
//copy_riten.innerHTML = obj.name;


//================================
//================================
//================================
