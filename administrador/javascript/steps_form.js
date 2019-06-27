$(document).ready(function(){
	var form = $("#contact");
	
	form.validate({
	    errorPlacement: function errorPlacement(error, element) { element.before(error); },
	    rules: {
	        confirm: {
	            equalTo: "#password"
	        },
	    usuario_cliente: {
	        required: true,
	        minlength: 3
	      },
	    password_cliente: {
	        required: true,
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

		    
	  	    	$.ajax({
		            type: "POST",
		            dataType: 'JSON',
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
		                    'usowww': $("#usowww").val(),
		                    'friendly': $("#friendly").val(),
		                    'id_estructura': $("#id_estructura").val(),
		                    'id_estilo': $("#id_estilo").val(),
		                    'jsonIdiomas': idiomas,
		                    'jsonModalidades': modalidades,
		                    'jsonTipospago': tipospago
		                  },
		            url: "index.php",
		            success : function(data) {
		             alert('guardado');
		            
		             $("#contact").submit();
		            }
		        });
	  	    	
	  	    	

	    }
	})
});