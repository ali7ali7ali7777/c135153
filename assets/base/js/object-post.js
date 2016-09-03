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
});




