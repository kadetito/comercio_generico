$(document).ready(function(){
	var form = $("#contact");
	
	form.validate({
	    errorPlacement: function errorPlacement(error, element) { element.before(error); },
	    rules: {
	        confirm: {
	            equalTo: "#password"
	        }
	    }
	});
	
	form.children("div").steps({
	    headerTag: "h3",
	    bodyTag: "section",
	    transitionEffect: "slideLeft",
	    onStepChanging: function (event, currentIndex, newIndex)
	    {
	    	
	    	if (currentIndex < newIndex)
	        {
	            // To remove error styles
	            form.find(".body:eq(" + newIndex + ") label.error").remove();
	            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
	        }
	        form.validate().settings.ignore = ":disabled,:hidden";
	        return form.valid();
	        
	        
	    },
	    onFinishing: function (event, currentIndex)
	    {
	        form.validate().settings.ignore = ":disabled";
	        return form.valid();
	    },
	    onFinished: function (event, currentIndex)
	    {

	             $.ajax({
	                 url: "index.php",
	                 type: "POST",
	                 success: function (response) {
	                     // Form fields on second step
	                     $("#accion").val(response.accion);
	                     $("#tienda_nombre").val(response.tienda_nombre);
	                     $("#id_tipotienda").val(response.id_tipotienda);
	                     $("#id_locale").val(response.id_locale);
	                     $("#usuario_cliente").val(response.usuario_cliente);
	                     $("#password_cliente").val(response.password_cliente);
	                     $("#nombre_cliente").val(response.nombre_cliente);
	                     $("#apellidos_cliente").val(response.apellidos_cliente);
	                     $("#email_cliente").val(response.email_cliente);
	                     $("#dni_cliente").val(response.dni_cliente);
	                     $("#id_moda").val(response.id_moda);
	                     $("#id_tipospago").val(response.id_tipospago);
	                     $("#dominio").val(response.dominio);
	                     $("#protocolo_preferente").val(response.protocolo_preferente);
	                     $("#usowww").val(response.usowww);
	                     $("#friendly").val(response.friendly);
	                     $("#id_estructura").val(response.id_estructura);
	                     alert('guardado');
	                 }
	             
	             });

	              $("#contact").submit();


	    }
	})
});