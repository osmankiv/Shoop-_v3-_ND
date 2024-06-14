


function fetch_data(data_search_box_value) {
    document.querySelector(".heading1").style.border = "2px solid #ff0a0a00 ";
    document.querySelector(".submit").style.display = "block";
    //post
    //alert(data_search_box_value.length);
    if (data_search_box_value.length == 0) {
        //document.querySelector('.disply_search_resalt_select').innerHTML = "";
        //.getElementsByClassName('.disply_search_resalt_select_itmes').innerHTML = "";
    }
    let heading = data_search_box_value;
    let pxhr = new XMLHttpRequest();// 'XMLHttpRequest' ينشئ كائن  
    pxhr.open('POST', 'verificatiion_of_add_new_item.php?id=' + heading + '', true);
    pxhr.setRequestHeader('Content-Type', 'application/json')
    let data = {
        heading: '' + heading + ''

    };
    pxhr.send(JSON.stringify(data));// send data of the search box
    pxhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
        if (pxhr.readyState === 4 && pxhr.status === 200) {
            console.log('done send data');
            //	window.location.href = 'data_indx.php?id='+heading+'';

        }
    };

    //fetch

    let xhr = new XMLHttpRequest(); //  	'XMLHttpRequest' ينشئ كائن  
    xhr.open('GET', 'verificatiion_of_add_new_item.php?id=' + heading + '', true); // يفتح طلب HTTP. أول معلمة هي طريقة الطلب ("GET" في هذه الحالة). 	المعلمة الثانية هي عنوان URL للطلب.
    xhr.onreadystatechange = function () { // يعين دالة يتم استدعاؤها كلما تغيرت حالة الطلب
        if (xhr.readyState === 4 && xhr.status === 200) {

            let response = JSON.parse(xhr.responseText);
            console.log(response);
            if (response.status == true) {

                document.querySelector(".heading1").style.border = "2px solid #ff0a0aea";
                document.querySelector(".submit").style.display = "none";
            }
            else {
                document.querySelector(".heading1").style.border = "2px solid #27ff0a ";
                document.querySelector(".submit").style.display = "block";
            }





        }
    };

    xhr.send();//

}
