//===================================
// post  data with XMLHTTPRequest	
// fetch data with XMLHTTPRequest	
//===================================
function fetch_data() {
    //post
    let dtaa_search_box = document.querySelector('#search_box').value;
    let pxhr = new XMLHttpRequest(); // 'XMLHttpRequest' ينشئ كائن  
    pxhr.open('POST', 'data_indx.php ');
    pxhr.onreadystatechange = function () {
        if (pxhr.readyState === 4 && pxhr.status === 200) {
            console.log('done send data');


        }
    };

    pxhr.send('heading' + encodeURIComponent(dtaa_search_box)); // 
    window.location.href("data_indx.php");



    //fetch
    let xhr = new XMLHttpRequest(); //  	'XMLHttpRequest' ينشئ كائن  
    xhr.open('GET', 'data_indx.php '); // يفتح طلب HTTP. أول معلمة هي طريقة الطلب ("GET" في هذه الحالة). المعلمة الثانية هي عنوان URL للطلب.
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response.heading);

            let but_fetch_data = document.querySelector('#but_fetch_data');
            let items_option = document.createElement('option');
            but_fetch_data.appendChild(items_option);
            dtaa_search_box.value = response.heading;



        }
    };

    xhr.send(); //

}
