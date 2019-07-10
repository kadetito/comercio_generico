//llamada datos modal m-01
//UNIDADES APLICABLES (MODALIDADES)
//
$(document).ready(function(){
	
			$('#m-01').click(function(){
		      var idcleint = $('input[type=hidden]').val();
			  var xhttp = new XMLHttpRequest();
			  idcliente=idcleint;
			  xhttp.onreadystatechange = function() {    
			    if (this.readyState == 4 && this.status == 200) {
			      document.getElementById("modal-01").innerHTML=this.responseText;
			    }   
			  };
			  xhttp.open("POST", "workers/unidadesaplicables.worker.php", true);
			  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			  xhttp.send ("idcliente="+idcliente);	
			});

				$("#edit_product").submit(function(event) {
				  var parametros = $(this).serialize();
					$.ajax({
							type: "POST",
							url: "workers/editarusuario.worker.php",
							data: parametros,
							success: function(datos){
							$("#resultados").html(datos);
							//console.log(parametros);
						  }
					});
				  //event.preventDefault();
				});
				
				
				
});