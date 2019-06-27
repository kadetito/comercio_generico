<?php
/* Smarty version 3.1.33, created on 2019-06-27 00:21:24
  from 'C:\AppServ\www\comercio_generico\administrador\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d13efe439fa02_44805816',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '48fd99726bb1909bd1d4dff7188d124d6fba5902' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\index.tpl',
      1 => 1561587355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d13efe439fa02_44805816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6851815975d13efe43140b1_48227597';
?>
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
		<?php echo '<script'; ?>
 src='https://code.jquery.com/jquery-2.2.4.min.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/bootstrap.min.js"><?php echo '</script'; ?>
>


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
            <?php echo '/*%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleTiposTiendaCheckbox\']->value;?>
/*/%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/';?>

            </select>
        <h4>Idiomas</h4>
        <div class="form-group idioms">
			<ul class="unstyled centered">
            <?php echo '/*%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleIdiomasCheckbox\']->value;?>
/*/%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/';?>

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
        <?php echo '/*%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleModalidadesCheckbox\']->value;?>
/*/%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/';?>

        <h4>Escoje los tipos de pago que usarás</h4>
        <?php echo '/*%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleTiposPagoCheckbox\']->value;?>
/*/%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/';?>


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
 <div class="col-md-12" >       
<div class="row">
<div class="col-md-4"></div>
</div>        
        
        

			<?php echo '/*%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleEstructurasCheckbox\']->value;?>
/*/%%SmartyNocache:6851815975d13efe43140b1_48227597%%*/';?>

        




 </div>
</div>
</section>

<h3>Estilos</h3>
<section>
 <div class="row">
 <div class="col-md-12" >       
<div class="row">
<div class="col-md-4"></div>
</div>        
        



                    <div id="modelo"></div>



 </div>
</div>
</section>





        <h3>Finish</h3>
        <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
        </section>
    </div>

</form>
</div>

		<?php echo '<script'; ?>
 src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='javascript/jquery.steps.min.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/steps_form.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/jquery.cookie-1.3.1.js"><?php echo '</script'; ?>
>
		
<?php echo '<script'; ?>
 async  language="javascript">
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
    if (this.readyState == 4 ) {
      document.getElementById("modelo").innerHTML=this.responseText;
    }   
  };
  xhttp.open("POST", "workers/estilos.worker.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send ("elegido="+elegido);
});
  
 




	
	
	
});
<?php echo '</script'; ?>
>
    </body>
</html><?php }
}
