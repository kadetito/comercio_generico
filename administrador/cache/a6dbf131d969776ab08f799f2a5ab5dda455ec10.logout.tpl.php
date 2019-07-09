<?php
/* Smarty version 3.1.33, created on 2019-07-09 16:33:05
  from 'C:\AppServ\www\comercio_generico\administrador\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24a5a1c6ff40_81149083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd4b5ab9a9bff837c6a20143d22f84563d81f588' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\logout.tpl',
      1 => 1562607647,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5d24a5a1c6ff40_81149083 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4">
	    <div>
	        <section>       
			<div class="row p-5">
						<div class="col-md-12 p-5">
							<div class="card text-white bg-danger">
								<h5 class="card-header"><i class="fas fa-store-alt"></i>   Acceso</h5>
									<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<ul class="card-text text-center">
											    <p class="saving">Un momento, por favor. Desconectando<span>.</span><span>.</span><span>.</span></p>
											 </ul>
										</div>
									</div>								
								</div>
							</div>					
						</div>						
					</div>						
				</div>
			</div>
	        </section>  
	</div>
</div>
<div class="col-md-4">&nbsp;</div>
</div>
</div>
		<script src='javascript/jquery-2.2.4.min.js'></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<script>
		$(window).load(function(){
		    $('.sk-fading-circle-back').fadeOut(100);
		});
		</script>
		<script src="javascript/popper.min.js"></script>
		<script src="javascript/tether.min.js"></script>
		<script src="javascript/bootstrap.min.js"></script>
		<script src='javascript/jquery.validate.js'></script>
		<script src="javascript/jquery.cookie-1.3.1.js"></script>
		<script>		
		
		$(document).ready(function() {                 
		    $("#login_form").submit(function(e){
				  e.preventDefault();
				  $.ajax({
					url:'workers/login.worker.php',
					type:'POST',
					data: {username:$("#lenamedelusuari").val(), password:$("#lepassdelusuari").val()},
					success: function(resp) {
					   if(resp == "invalid") {
							$("#errorMsg").html("Invalid username and password!");  
					   } else {
							window.location.href= resp;
			                console.log(lenamedelusuari);
			 		    	console.log(lepassdelusuari);
					   }
					}
				 });
			});
		});		
		
		</script>
    </body>
</html><?php }
}
