<?php
/* Smarty version 3.1.33, created on 2019-07-04 22:08:58
  from 'C:\AppServ\www\comercio_generico\administrador\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e5cda65b1c2_27196528',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '48fd99726bb1909bd1d4dff7188d124d6fba5902' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\index.tpl',
      1 => 1562270522,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5d1e5cda65b1c2_27196528 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ADMIN Comercio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/iconos/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/iconos/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/iconos/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/iconos/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/iconos/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/iconos/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/iconos/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/iconos/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/iconos/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/iconos/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/iconos/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/iconos/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/iconos/favicon-16x16.png">
		<link rel="manifest" href="assets/iconos/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
        <link href="estilos/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/main.css">
        <link rel="stylesheet" href="estilos/jquery.steps.css">
        <link rel="stylesheet" href="estilos/checks.css">
        <link rel="stylesheet" href="estilos/radios.css">
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"></script>
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="javascript/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body><?php echo $_smarty_tpl->tpl_vars['errorLocalizado']->value;?>
<div id="democon"></div>
<div class="container">
<form id="contact" name="form" action="#">
<input type="hidden" name="accion" id="accion" value="altatienda"/>
    <div>
        <h3><span class="texticon"><i class="fas fa-folder-plus"></i> Nueva tienda</span><span class="icontext"><i class="fas fa-folder-plus fa-2x"></i></span></h3>

        <section>       <h4 class="displaywhen">Nueva tienda</h4>
            <label for="tienda_nombre">Nombre del Comercio</label>
            <input id="tienda_nombre" placeholder="" name="tienda_nombre" type="text" class="required">
            <label for="id_tipotienda">Qué necesita vender?</label>
            
            <select id="id_tipotienda"  placeholder="" name="id_tipotienda" class="form-control required">
            <option value="">Seleccione el tipo de comercio</option>
            <?php echo $_smarty_tpl->tpl_vars['bucleTiposTiendaCheckbox']->value;?>

            </select>
        <h4>Idiomas</h4>
        <div class="form-group idioms">
			<ul class="unstyled centered">
            <?php echo $_smarty_tpl->tpl_vars['bucleIdiomasCheckbox']->value;?>

            </ul>
         </div>
         <div class="form-group">
            <label for="usuario_cliente">Nombre de usuario<div id="result-username"></div></label>
            <input id="usuario_cliente" name="usuario_cliente" type="text" value="" class="required">
            <label for="password_cliente">Password</label>
            <input id="password_cliente" name="password_cliente" type="text"  value="" class="required password">
            </div>
        </section>
        <h3><span class="texticon"><i class="fas fa-user-alt"></i> Perfil usuario</span><span class="icontext"><i class="fas fa-user-alt fa-2x"></i></span></h3>

        <section><h4 class="displaywhen">Perfil usuario</h4>
            <label for="nombre_cliente">Nombre</label>
            <input id="nombre_cliente" name="nombre_cliente" type="text" class="required">
            <label for="apellidos_cliente">Apellidos</label>
            <input id="apellidos_cliente" name="apellidos_cliente" type="text" class="required">
            <label for="email_cliente">Email<div id="result-email"></div></label>
            <input id="email_cliente" name="email_cliente" type="text" class="required email">
            <label for="dni_cliente">DNI/NIF <div id="result-dni"></div></label>
            <input id="dni_cliente" name="dni_cliente" type="text" value=""  class="identificacionES required">
        </section>
        <h3><span class="texticon"><i class="fa fa-tasks"></i> Características</span><span class="icontext"><i class="fa fa-tasks fa-2x"></i></span></h3>

        <section><h4 class="displaywhen">Características</h4>
        <h4>Escoje qué características tendrán los productos de la tienda</h4>
        <ul class="unstyled centered"><?php echo $_smarty_tpl->tpl_vars['bucleModalidadesCheckbox']->value;?>
</ul>
        <h4>Escoje los tipos de pago que usarás</h4>
        <ul class="unstyled centered"><?php echo $_smarty_tpl->tpl_vars['bucleTiposPagoCheckbox']->value;?>
</ul>

        </section>
              <h3><span class="texticon"><i class="fas fa-server"></i> Dominio y Servidor</span><span class="icontext"><i class="fas fa-server fa-2x"></i></span></h3>


        <section><h4 class="displaywhen">Dominio y Servidor</h4>
            <label for="dominio">Dominio</label><input id="dominio" name="dominio" type="text"  value="43445454e" class="required" />
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
   <input id="usowww1" class="styled-checkbox required www" name="usowww" type="radio" value="S">
   <span class="checkmarkr"></span>
</label>
<label class="containerradio" for="usowww2">No
   <input id="usowww2" class="styled-checkbox required www" name="usowww" type="radio" value="N">
   <span class="checkmarkr"></span>
</label>
</p>           
</div>

<div class="col-md-6">
<p>&nbsp;</p>
<p>Friendly URL</p>
<p>
<label class="containerradio" for="friendly1">Si
   <input id="friendly1" class="styled-checkbox required cxd" name="friendly" type="radio" value="S">
   <span class="checkmarkr"></span>
</label>
<label class="containerradio" for="friendly2">No
   <input id="friendly2" class="styled-checkbox required cxd" name="friendly" type="radio" value="N">
   <span class="checkmarkr"></span>
</label>
</p>     
</div>
</div>

</section>

 <h3><span class="texticon"><i class="fas fa-pencil-ruler"></i> Estructura</span><span class="icontext"><i class="fas fa-pencil-ruler fa-2x"></i></span></h3>



<section><h4 class="displaywhen">Estructura</h4>
 <div class="row">
 <div class="col-md-12" >       
<div class="row">
<div class="col-md-4"></div>
</div>        
        
        
<div class="ex3">
			<?php echo $_smarty_tpl->tpl_vars['bucleEstructurasCheckbox']->value;?>

</div>        




 </div>
</div>
</section>

 <h3><span class="texticon"><i class="fab fa-css3"></i> Estilos</span><span class="icontext"><i class="fab fa-css3  fa-2x"></i></span></h3>


<section><h4 class="displaywhen">Estilos</h4>
 <div class="row">
 <div class="col-md-12" >       
<div class="row">
<div class="col-md-4"></div>
</div>        
        



                    <div id="modelo"></div>



 </div>
</div>
</section>





 <h3><span class="texticon"><i class="far fa-thumbs-up"></i> Finalizar</span><span class="icontext"><i class="far fa-thumbs-up fa-2x"></i></span></h3>

		<section><h4 class="displaywhen">Finalizar</h4>
		<label class="containercheck" for="acceptTerms">I agree with the Terms and Conditions.
			<input id="acceptTerms" class="styled-checkbox required" name="acceptTerms" type="checkbox">
			<span class="checkmark"></span>
		</label>
		</section>
    </div>

</form>
</div>

		<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
		<script src='javascript/jquery.steps.min.js'></script>
		<script src="javascript/steps_form.js"></script>
		<script src="javascript/jquery.cookie-1.3.1.js"></script>
		
<script async  language="javascript">

$(document).ready(function(){
	$("input[name='id_estructura']").change(function(){	
	  var xhttp = new XMLHttpRequest();
	  elegido=$(this).val();
	  xhttp.onreadystatechange = function() {    
	    if (this.readyState == 4 ) {
	      document.getElementById("modelo").innerHTML=this.responseText;
	    }   
	  };
	  xhttp.open("POST", "workers/estilos.worker.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send ("elegido="+elegido);
	});
});  


$(document).ready(function(){	
	$("input[name='usuario_cliente']").blur(function(){		       
		 var xhttp = new XMLHttpRequest();
		 usuario_cliente=$(this).val();
		  xhttp.onreadystatechange = function() {    
		    if (this.readyState == 4 ) {      
				var devuelvo = this.responseText;
if(devuelvo == '1'){
	$("input[name='usuario_cliente']").val('');
	document.getElementById("result-username").innerHTML="<span class=\"alerta\">Usuario ya existente, escoja otro</span>";
} else {
}
		    }   
		  };
		  xhttp.open("POST", "workers/validausuarios.worker.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send ("usuario_cliente="+usuario_cliente);	 
	    });              
});  

$(document).ready(function(){	
	$("input[name='email_cliente']").blur(function(){		       
		 var xhttp = new XMLHttpRequest();
		 email_cliente=$(this).val();
		  xhttp.onreadystatechange = function() {    
		    if (this.readyState == 4 ) {
				var devuelvomail = this.responseText;
				if(devuelvomail == '1'){
					$("input[name='email_cliente']").val('');

					document.getElementById("result-email").innerHTML="<span class=\"alerta\">Este e-mail ya dispone de una tienda</span>";
				} else {
					document.getElementById("result-email").innerHTML="";

				}
		    }   
		  };
		  xhttp.open("POST", "workers/validausuarios.worker.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send ("email_cliente="+email_cliente);	 
	    });              
});  


$(document).ready(function(){	
	$("input[name='dni_cliente']").blur(function(){		       
		 var xhttp = new XMLHttpRequest();
		 dni_cliente=$(this).val();
		  xhttp.onreadystatechange = function() {    
		    if (this.readyState == 4 ) {
				var devuelvodni = this.responseText;
				if(devuelvodni == '1'){
					$("input[name='dni_cliente']").val('');

					document.getElementById("result-dni").innerHTML="<span class=\"alerta\">Este DNI ya dispone de una tienda</span>";
				} else {
					document.getElementById("result-dni").innerHTML="";

				}
		    }   
		  };
		  xhttp.open("POST", "workers/validausuarios.worker.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send ("dni_cliente="+dni_cliente);	 
	    });              
});  


</script>
    </body>
</html><?php }
}
