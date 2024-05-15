let dtaa_search_box = document.querySelector('#search_box').value;
	let pxhr = new XMLHttpRequest();
	pxhr.open('POST', 'data_indx.php ');
	pxhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
		if ( pxhr.status === 200) {
			console.log('done send data');

		}
	};

	pxhr.send('heading' + encodeURIComponent(dtaa_search_box) );