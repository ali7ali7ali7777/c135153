$(document).ready(function() {
	$("a#empty").click(function(){
		$.post('shop-cart.php',
		{'action':'empty'});
	});
	$("a#remove").click(function(){
		var j_cod = $(this).attr("code");
		$.post('shop-cart.php',
				{'action': "remove", 'code': j_cod});
	});
	$("button#quant").on("click",function(){
		var j_data_input = $(this).attr("data_input");
		var j_code_1 = $(this).attr("code");
		var j_quantity = $("input[name=quantity]." + j_data_input).val();
		$.post("shop-cart.php",
				{'action': "add",
				 'quantity': j_quantity,
				 'code': j_code_1 });
		$(location).attr("href", "shop-cart.php");
	});
	$("button.fix").click(function() {
		var j_quan = $("input[name=quantity]").val();
		var j_pic1 = $("input[name=pic1]").val();
		var j_pic2 = $("input[name=pic2]").val();
		var j_color = $("select[name=color]").val();
		var j_size = $("select[name=size]").val();
		var j_code = $("input[name=code]").val();
		var j_user = $("input[name=user_id]").val();
		var j_ch_1 = $("input[name=ch_1]").val();
		var j_ch_2 = $("input[name=ch_2]").val();
		if ( $( this ).attr("id") == 'ad_s' && j_ch_2 == 11 ){
			$.post("shop-cart.php",
			  {quantity : j_quan,
			   pic1 : j_pic1,
			   pic2 : j_pic2,
			   color : j_color,
			   size : j_size,
			   action : 'add',
			   code : j_code
			   });
			$("#myModal2 .2").css("display","none");
			$("#myModal2").modal();
		}
		else if ( $( this ).attr("id") == 'ad_s' && j_ch_2 != 11 ){
			$("#myModal2 .3").css("display","none");
			$('#myModal2').modal();
		}
		if ( $( this ).attr("id") == 'ad_w' ){
			if(j_user != "")
			{
				if(j_ch_1 == 11 )
				{
					$.post("shop-product-wishlist.php",
						   {code: j_code,
							action: 'add'});
					$("#myModal1 .2").css("display","none");
					$("#myModal1").modal();
				}
				else if (j_ch_1 != 11 )
				{
					$("#myModal1 .3").css("display","none");
					$("#myModal1").modal();	
				}
			}
			else
			{
				$('#myModal1').modal();
			}
		}
		
	});
	$("#out").click(function(){
		$.post('login.php?o=o',
		{send: 'out'});
	});
	$("#edame").click(function(){
		$(location).attr('href', 'index.php');
	});
	$("#sh_wi").click(function(){
		$(location).attr('href', 'shop-product-wishlist.php');
	});
	$('[id^="bast"]').on("click",function(){
		var j_href = "shop-product-details.php?selected=" + $("input[name=id]").val();
    	$(location).attr('href', j_href);
	});
	$("button#ad_to").click(function(){
		var j_cod = $(this).attr("code");
		$(location).attr('href', "shop-product-details.php?code=" + j_cod );
	});
	$("button#re_w").click(function(){
		var j_cod = $(this).attr("code");
		$.post("shop-product-wishlist.php",
		{action: 'remove',
		 code: j_cod});
		$(location).attr('href', "shop-product-wishlist.php" );
	});
	$("select#ghone").change(function(){
		var gro = $(this).val();
		$(location).attr('href', "shop-product-search.php?send=search&gro=" + gro );
	});
	$("select#sort").change(function(){
		var matkol = $(this).val();
		$(location).attr('href', "shop-product-search.php?send=search&gro=" + matkol );
	});
});



$(document).ready(function(){
	//$('select#per_p').change(function() {
        //how much items per page to show
	var show_per_page =5; 
    //alert(show_per_page);
	//getting the amount of elements inside content div
	var number_of_items = $('#content').children().size();
    //calculate the number of pages we are going to have
	var number_of_pages = Math.ceil(number_of_items/show_per_page);
	
	//set the value of our hidden input fields
	$('#current_page').val(0);
	$('#show_per_page').val(show_per_page);
	
	//now when we got all we need for the navigation let's make it '
	
	/* 
	what are we going to have in the navigation?
		- link to previous page
		- links to specific pages
		- link to next page
	*/
var navigation_html =  '<li><a  href="javascript:next();"><i class="fa fa-angle-right"></i></a></li>';
	var current_link = 0;
	while(number_of_pages > current_link){
		navigation_html += '<li class="page_link"><a  href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a></li>';
		current_link++;
	}
	navigation_html +='<li><a  href="javascript:previous();"><i class="fa fa-angle-left"></i></a></li>';
	
	$('.c-content-pagination').html(navigation_html);
	
	//add active_page class to the first page link
	$('.c-content-pagination .page_link:first').addClass('c-active');
	
	//hide all the elements inside content div
	$('#content').children().css('display', 'none');
	
	//and show the first n (show_per_page) elements
	$('#content').children().slice(0, show_per_page).css('display', 'block');
	
});

function previous(){
	
	new_page = parseInt($('#current_page').val()) - 1;
	//if there is an item before the current active link run the function
	if($('.c-active').prev('.page_link').length==true){
		go_to_page(new_page);
	}
	
}

function next(){
	new_page = parseInt($('#current_page').val()) + 1;
	//if there is an item after the current active link run the function
	if($('.c-active').next('.page_link').length==true){
		go_to_page(new_page);
	}
	
}
function go_to_page(page_num){
	//get the number of items shown per page
	var show_per_page = parseInt($('#show_per_page').val());
	
	//get the element number where to start the slice from
	start_from = page_num * show_per_page;
	
	//get the element number where to end the slice
	end_on = start_from + show_per_page;
	
	//hide all children elements of content div, get specific items and show them
	$('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
	
	/*get the page link that has longdesc attribute of the current page and add active_page class to it
	and remove that class from previously active page link*/
	$('.page_link[longdesc=' + page_num +']').addClass('c-active').siblings('.c-active').removeClass('c-active');
	
	//update the current page input field
	$('#current_page').val(page_num);
}

