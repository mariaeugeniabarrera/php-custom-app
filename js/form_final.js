$(function(){
    //CONTACT FORM AJAX SUBMIT
    $('#formulario_final').submit(function(){


		$.ajax({
			url:'process_form_final.php',
			type : 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data){
				if(data.error){
					alertify.error("Error!!! datos no enviados...");
				}else {
					 //alertify.success("Success notification");
					//window.location = "tos.php";
					$(location).attr('href','final_promo.php');
				}
				
			}
		})
        return false;
    })


})