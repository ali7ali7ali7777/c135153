$(document).ready(function() {
	$("a#empty").click(function(){
		$.post('shop-cart.php',
		{'action':'empty'});
	});
	$("a#remove").click(function(){
		var j_cod = $(this).attr("code");
		$.post('shop-cart.php',
				{'action':'remove', 'code':j_cod});
	});
	$("button#quant").on('click',function(){
		var j_data_input = $(this).attr("data_input");
		var j_code_1 = $(this).attr("code");
		var j_quantity = $('input[name=quantity].' + j_data_input).val();
		$.post('shop-cart.php',
				{'action':'add',
				 'quantity':j_quantity,
				 'code': j_code_1 });
		$(location).attr('href', 'shop-cart.php');
	});
	$('#add').click(function() {
		var j_quan = $("input[name=quantity]").val();
		var j_pic1 = $("input[name=pic1]").val();
		var j_pic2 = $("input[name=pic2]").val();
		var j_color = $("select[name=color]").val();
		var j_size = $("select[name=size]").val();
		var j_code = $("input[name=code]").val();
		var j_href = "shop-product-details.php?selected="+$("input[name=id]").val();
		$.post('shop-cart.php' ,
		  {'quantity' : j_quan,
		   'pic1' : j_pic1,
		   'pic2' : j_pic2,
		   'color' : j_color,
		   'size' : j_size,
		   'action' : 'add',
		   'code' : j_code
		   });
		$(location).attr('href', j_href);
    });
	$("#out").click(function(){
		$.post('header.php',
		{'send':'out'});
	});
});