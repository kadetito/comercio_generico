<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jQeury.steps Demos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="estilos/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/main.css">
        <link rel="stylesheet" href="estilos/jquery.steps.css">
        <link rel="stylesheet" href="estilos/checks.css">
        <link rel="stylesheet" href="estilos/radios.css">
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"></script>
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="javascript/bootstrap.min.js"></script>


    </head>
    <body>
<div class="container">
<form id="contact" action="#" method="POST">
<input type="hidden" name="accion" id="accion" value="altatienda"/>
    <div>
        <h3>Nueva tienda</h3>
        <section>
            <label for="tienda_nombre">Nombre del Comercio</label>
            <input id="tienda_nombre" name="tienda_nombre" type="text" class="required">
            <label for="id_tipotienda">Qué necesita vender?</label>
            
            <select id="id_tipotienda" name="id_tipotienda" class="form-control required">
            <option value="">Seleccione el tipo de comercio</option>
            {$bucleTiposTiendaCheckbox}
            </select>
        <h4>Idiomas</h4>
        <div class="form-group idioms">
			<ul class="unstyled centered">
            {$bucleIdiomasCheckbox}
            </ul>
         </div>
         <div class="form-group">
            <label for="usuario_cliente">Nombre de usuario (para administrar la tienda)</label>
            <input id="usuario_cliente" name="usuario_cliente" type="text" class="required">
            <label for="password_cliente">Password</label>
            <input id="password_cliente" name="password_cliente" type="text" class="required password">
            </div>
        </section>
        <h3>Perfil usuario</h3>
        <section>
            <label for="nombre_cliente">Nombre</label>
            <input id="nombre_cliente" name="nombre_cliente" type="text" class="required">
            <label for="apellidos_cliente">Apellidos</label>
            <input id="apellidos_cliente" name="apellidos_cliente" type="text" class="required">
            <label for="email_cliente">Email</label>
            <input id="email_cliente" name="email_cliente" type="text" class="required email">
            <label for="dni_cliente">DNI/NIF</label>
            <input id="dni_cliente" name="dni_cliente" type="text"  class="required">
        </section>
        <h3>Características</h3>
        <section>
        <h4>Escoje qué características tendrán los productos de la tienda</h4>
        {$bucleModalidadesCheckbox}
        <h4>Escoje los tipos de pago que usarás</h4>
        {$bucleTiposPagoCheckbox}

        </section>
        <h3>Dominio y redirección</h3>
        <section>
            <label for="dominio">Dominio</label><input id="dominio" name="dominio" type="text" value="" class="required" />
            <label for="protocolo_preferente">Protocolo preferente</label>
            <select id="protocolo_preferente" class="form-control required" name="protocolo_preferente">
				<option value="http://">http://</option>
				<option value="https://">https://</option>
			</select>

<div class="row">
<div class="col-md-6">

<p>&nbsp;</p>
<p>Uso de www.</p>
<p>
<label class="containerradio" for="usowww1">Si
   <input id="usowww1" class="styled-checkbox required" name="usowww" type="radio" value="S">
   <span class="checkmarkr"></span>
</label>
<label class="containerradio" for="usowww2">No
   <input id="usowww2" class="styled-checkbox required" name="usowww" type="radio" value="N">
   <span class="checkmarkr"></span>
</label>
</p>           
</div>

<div class="col-md-6">
<p>&nbsp;</p>
<p>Friendly URL</p>
<p>
<label class="containerradio" for="friendly1">Si
   <input id="friendly1" class="styled-checkbox required" name="friendly" type="radio" value="S">
   <span class="checkmarkr"></span>
</label>
<label class="containerradio" for="friendly2">No
   <input id="friendly2" class="styled-checkbox required" name="friendly" type="radio" value="N">
   <span class="checkmarkr"></span>
</label>
</p>     
</div>
</div>

         </section>
           <h3>Estructura</h3>
        <section>
        
<div class="row">
<div class="col-md-4"></div>
</div>        
        
        

			{$bucleEstructurasCheckbox}
        


                    <div id="modelo">{$bucleEstilosCheckbox}</div>



          
         </section>
        <h3>Finish</h3>
        <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
        </section>
    </div>
</form>
</div>

		<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
		<script src='javascript/jquery.steps.min.js'></script>
		<script src="javascript/steps_form.js"></script>
		<script src="javascript/jquery.cookie-1.3.1.js"></script>
		
<script async  language="javascript">{literal}
$(document).ready(function(){
	
	
		
// 	$("input[name='id_estructura']").change(function(){	
// 	 $("input[name='id_estructura']").each(function(){

       
//             elegido=$(this).val();
//             $.post("index.php", { elegido: elegido }, function(data){
//                 $("#modelo").html(data);
//             });			
        
//    })
// 	})
	
$("input[name='id_estructura']").change(function(){	
  var xhttp = new XMLHttpRequest();
  elegido=$(this).val();
  xhttp.onreadystatechange = function() {
	  
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("modelo").innerHTML =
this.responseText;
    }
  
  };
  xhttp.open("POST", "index.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send ("elegido="+elegido);
});
  
 




	
	
	
});{/literal}
</script>
    </body>
</html>