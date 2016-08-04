// JavaScript Document



$(function() {
  $("#btn-contact").on("click", function() {
        $btn = $(this);
        if ($btn.val() == "1") {
            $("input[id='text-input-methods']").attr('disabled', 'disabled');
			$("textarea[id='text-input-methods']").attr('disabled', 'disabled');
			$("button[id='text-input-methods']").attr('disabled', 'disabled');
            $btn.attr("value" , "2" );
			$btn.html('روشن');
        }
        else {
            $("input[id='text-input-methods']").removeAttr('disabled', 'disabled');
			$("textarea[id='text-input-methods']").removeAttr('disabled', 'disabled');
			$("button[id='text-input-methods']").removeAttr('disabled', 'disabled');
            $btn.attr("value" , "1" );
			$btn.html('خاموش');
        }
    });
	
	
	
	
	
	
	

});
