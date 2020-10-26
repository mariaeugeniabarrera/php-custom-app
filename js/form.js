$(function(){
    //CONTACT FORM AJAX SUBMIT
    $('#formulariodatos').submit(function(){


		$.ajax({
			url:'process_form_compartir.php',
			type : 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data){
				if(data.error){
					alertify.error("Error!!! datos no enviados...");
				}else {
					 //alertify.success("Success notification");
					//window.location = "tos.php";
					$(location).attr('href','listaimagenes.php');
				}
				
			}
		})
        return false;
    })


})