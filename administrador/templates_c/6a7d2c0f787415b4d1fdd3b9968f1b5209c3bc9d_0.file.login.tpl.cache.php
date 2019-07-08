<?php
/* Smarty version 3.1.33, created on 2019-07-08 23:16:20
  from 'C:\AppServ\www\comercio_generico\administrador\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23b2a4a4ee54_55330751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7d2c0f787415b4d1fdd3b9968f1b5209c3bc9d' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\login.tpl',
      1 => 1562608053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d23b2a4a4ee54_55330751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9513131315d23b2a49f4de7_28009637';
?>
<!DOCTYPE html>
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
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
        <link href="estilos/2bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/main.css">
		<link rel="stylesheet" href="estilos/navbar.css">
		<link rel="stylesheet" href="estilos/loader.css">
    </head>
    <body>
	<div class="sk-fading-circle-back">
	  <div class="sk-fading-circle">
		  <div class="sk-circle1 sk-circle"></div>
		  <div class="sk-circle2 sk-circle"></div>
		  <div class="sk-circle3 sk-circle"></div>
		  <div class="sk-circle4 sk-circle"></div>
		  <div class="sk-circle5 sk-circle"></div>
		  <div class="sk-circle6 sk-circle"></div>
		  <div class="sk-circle7 sk-circle"></div>
		  <div class="sk-circle8 sk-circle"></div>
		  <div class="sk-circle9 sk-circle"></div>
		  <div class="sk-circle10 sk-circle"></div>
		  <div class="sk-circle11 sk-circle"></div>
		  <div class="sk-circle12 sk-circle"></div>
	  </div>
	</div>
<div class="container-fluid distanciatop">
<div class="row">
<div class="col-md-5">&nbsp;</div>
<div class="col-md-2">
	    <div>
	        <section>       	
				<div class="row">
					<div class="col-md-12">
					 <form  method="POST" id="login_form">
						<div class="card text-white bg-danger">
								<h5 class="card-header"><i class="fas fa-store-alt"></i>   Acceso</h5>
								<div class="card-body">
										<div class="row">
											<div class="col-md-12">
													<ul class="card-text">
													    <li><label for="lenamedelusuari">Nombre de usuario</label><input type="text" name="lenamedelusuari" value="" class="form-control" id="lenamedelusuari" placeholder="Nombre de usuario" required autofocus /></li>  
													    <li><label for="lepassdelusuari">Password</label><input type="text" name="lepassdelusuari" value="" class="form-control" id="lepassdelusuari" placeholder="Password"  required /></li>  
													 </ul>
											</div>
										</div>								
										<div class="row mt-5">
											<div class="col-md-12 text-center mb-5">
													<input type="submit" name="senddatos" value="Acceder" class="btn btn-primary" />
													<label class="form-check-label mt-3">
										            <span class="text-danger align-middle" id="errorMsg"></span>
										          </label>
										   </div>
								       </div>
							     </div>	
						  </div>								
					</form>													
					</div>
				</div>
		</section>  				
	  </div>						
  </div>	
  <div class="col-md-5">&nbsp;</div>					
 </div>
</div>
		<?php echo '<script'; ?>
 src='javascript/jquery-2.2.4.min.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		$(window).load(function(){
		    $('.sk-fading-circle-back').fadeOut(100);
		});
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/tether.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='javascript/jquery.validate.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/jquery.cookie-1.3.1.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>	
		
		$(document).ready(function() {                 
		    $("#login_form").submit(function(e){
				  e.preventDefault();
				  $.ajax({
					url:'workers/login.worker.php',
					type:'POST',
					data: {username:$("#lenamedelusuari").val(), password:$("#lepassdelusuari").val()},
					success: function(resp) {
					   if(resp == "invalid") {
							$("#errorMsg").html("Usuario o password incorrectos!");  
					   } else {
							window.location.href= resp;
			                console.log(lenamedelusuari);
			 		    	console.log(lepassdelusuari);
					   }
					}
				 });
			});
		});		
		
		<?php echo '</script'; ?>
>
    </body>
</html><?php }
}
