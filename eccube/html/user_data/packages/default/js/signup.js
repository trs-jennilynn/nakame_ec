var typing = function(){
	
	
	
	$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").keyup(function(e){
		if (event.keyCode == 8 || event.keyCode == 46) {
			if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length = 0){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length < 2){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length > 1){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#DFF0D8"});
			}
		}else{

			if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length <= 0){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length < 2){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length > 1){
				$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#DFF0D8"});
			}
		}
	});
	
	$(".signup-forms").find(".form_row:nth-child(2)").keyup(function(e){
		var emil=$(".signup-forms").find(".form_row:nth-child(2)").find('.input-text').val();
		var emailReg = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		      	$(this).filter(function(){
					if( !emailReg.test( emil ) ) {
			        //alert('Please enter valid email');
			        $(".signup-forms").find(".form_row:nth-child(2)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			        } else {
			        //alert('Thank you for your valid email');
			        $(".signup-forms").find(".form_row:nth-child(2)").find(".input-text").css({"backgroundColor":"#DFF0D8"});
			        }
	        });
	});
	
	
	$(".signup-forms").find(".form_row:nth-child(3)").keyup(function(e){
		if (event.keyCode == 8 || event.keyCode == 46) {

			if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length = 0){
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length < 8){
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length > 8){
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#DFF0D8"});
			}
		}else{

			if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length = 0){
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length < 8){
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
			}
			else if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length > 7){
				
				$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#DFF0D8"});
			}
		}
	});
	
};

var submit = function(){	
	$("#signup").submit(function(event){
		var email=$(".signup-forms").find(".form_row:nth-child(2)").find('.input-text').val();
		var emailReg1 = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);

		if($(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").val().length < 2){
			event.preventDefault();
			$(".signup-forms").find(".form_row:nth-child(1)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
		}
		if( !emailReg1.test( email ) ) {
	        //alert('Please enter valid email');
	        event.preventDefault();
	        $(".signup-forms").find(".form_row:nth-child(2)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
	    }
		if($(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").val().length < 8){
			event.preventDefault();
			$(".signup-forms").find(".form_row:nth-child(3)").find(".input-text").css({"backgroundColor":"#F9E1E1"});
	    }
		if(!$(".input-checkbox").is(':checked')){
			event.preventDefault();
		}
	});
};

$(document).ready(function(){

	var a = typing();
	var b = submit();
});
	if($(".btn-blue").click()){
		$r = $("#username").val();
		alert($r);
	}