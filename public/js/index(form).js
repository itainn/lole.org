$(document).ready(function(){ 

	//funcion que valida email mediante regexp
	function validateEmail(email){
		var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return pattern.test(email);
	}

	//Selector del boton con Id=btn y evento click
	$("#btn").click(function() {

		//Sólo se valida el campo EMAIL (si es vacío y cumple el formato de regExp)
		var email_msg = "";

		var test = validateEmail($("#email").val());

		if($("#email").val() == "") { //val(): value del input
			$("#email").addClass("border_error"); //añade clase css ya definida en el doc. "index.css"
			email_msg = "El campo Email está vacío";
			$("#data").html(email_msg); //html() inyecta código HTML en el elemento seleccionado
		}else if(!validateEmail($('#email').val())){
			$("#email").addClass("border_error"); //añade clase css ya definida en el doc. "index.css"
			email_msg = "El campo Email no es correcto";
			$("#data").html(email_msg); //html() inyecta código HTML en el elemento seleccionado
		}else{
			$("#email").removeClass("border_error"); //elimina clase css ya definida en el doc. "index.css"
		}
		
		if(email_msg == ""){

			$.ajax({//configuración de envío de datos
				type: "post", //tipo de envío mediante POST
				url: "ajax/contact", //archivo que es llamado en el server
				dataType: "json", //tipo de dato en formato json
				data: $("#ajaxform").serialize(), //datos que se envían del formulario en formato: name:valor
				//------------------------------------------------------
				//acciones de envío y respuesta
				success: function(dataSuccess){
					$("#data").html(dataSuccess);
				},
				beforeSend: function(){
					$("#data").html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>');
				},
				error: function(){
					$("#data").html("error");
				}

			});

		}
		
	});
  
});