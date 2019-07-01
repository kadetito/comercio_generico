$(document).ready(function(){
	jQuery.validator.addMethod("noSpace", function(value, element)   { //Code used for blank space Validation 
	    return value.indexOf(" ") < 0 && value != ""; 
	    }, "No use espacios para su nombre de usuario"); 

	
    $.extend(jQuery.validator.messages, {
        required: "<i class=\"fas fa-times-circle\"></i>",
        remote: "Please fix this field.",
        email: "Introduzca una dirección e-mail válida.",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        dateISO: "Please enter a valid date (ISO).",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Please enter the same value again.",
        accept: "Please enter a value with a valid extension.",
        maxlength: $.validator.format("No se permiten más de {0} carácteres."),
        minlength: $.validator.format("Escriba más de {0} caracteres."),
        rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
        range: $.validator.format("Please enter a value between {0} and {1}."),
        max: $.validator.format("Please enter a value less than or equal to {0}."),
        min: $.validator.format("Please enter a value greater than or equal to {0}.")
    });
	
	var form = $("#contact");
	var currentStep = 0; //store current step number
	form.validate({
		
		
	
	    errorPlacement: function errorPlacement(error, element) { 
	    	element.before(error); 
//	    	 element.attr("placeholder", error[0].outerText);
//	    	  element.parent("label").next("label") ;
	    },
	    rules: {
		        confirm: {
		            equalTo: "#password"
		        },
		    usuario_cliente: {
		        required: true,
		        minlength: 5,
		        noSpace: true,
		        maxlength: 10
		      },
		    password_cliente: {
		        required: true,
		        noSpace: true,
		        minlength: 6
		      },
		    dni_cliente: {
		        required: true,
		        minlength: 9,
		        maxlength: 9
		      },
	
		    email_cliente: {
		        required: true,
		        email: true
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

	    	
	    	//array idiomas
	    	var idioms=[];
	    	idioms.length=0;
		    	    $('#contact input[name="id_locale[]"]').each ( function() {
		    	    	if ($(this).is(':checked')) {
		    	    		idioms.push($(this).val());
		    	      }
		    	    });
		    var idiomas = JSON.stringify(idioms);
	    	
	    	//array modalidades 
	    	var modalis=[];
	    	modalis.length=0;
		    	    $('#contact input[name="id_moda[]"]').each ( function() {
		    	    	if ($(this).is(':checked')) {
		    	    		modalis.push($(this).val());
		    	      }
		    	    });
		    var modalidades = JSON.stringify(modalis);
		    
	    	//array tipos de pagos
	    	var tipgs=[];
	    	tipgs.length=0;
		    	    $('#contact input[name="id_tipospago[]"]').each ( function() {
		    	    	if ($(this).is(':checked')) {
		    	    		tipgs.push($(this).val());
		    	      }
		    	    });
		    var tipospago = JSON.stringify(tipgs);

		    var usowww = $("input[name='usowww']:checked").val();
		    var friendly = $("input[name='friendly']:checked").val();
		    
		    var id_estructura = $("input[name='id_estructura']:checked").val();
		    var id_estilo = $("input[name='id_estilo']:checked").val();
		    
	  	    	$.ajax({
		            type: "GET",
		            url: "index.php",

		            data: { 
		            	    'accion': $("#accion").val(),
		                    'tienda_nombre': $("#tienda_nombre").val(),
		                    'id_tipotienda': $("#id_tipotienda").val(),
		                    'usuario_cliente': $("#usuario_cliente").val(),
		                    'password_cliente': $("#password_cliente").val(),
		                    'nombre_cliente': $("#nombre_cliente").val(),
		                    'apellidos_cliente': $("#apellidos_cliente").val(),
		                    'email_cliente': $("#email_cliente").val(),
		                    'dni_cliente': $("#dni_cliente").val(),
		                    'dominio': $("#dominio").val(),
		                    'protocolo_preferente': $("#protocolo_preferente").val(),
		                    'usowww': usowww,
		                    'friendly': friendly,
		                    'id_estructura': id_estructura,
		                    'id_estilo':id_estilo,
		                    'jsonIdiomas': idiomas,
		                    'jsonModalidades': modalidades,
		                    'jsonTipospago': tipospago
		                  },
		            
		            success: function(data) {
		             alert('guardado');
		             
		             event.preventDefault();
		             location.href = "resultado.php"
		            }
		        });
	  	    	
	  	    	

	    }
	})
});