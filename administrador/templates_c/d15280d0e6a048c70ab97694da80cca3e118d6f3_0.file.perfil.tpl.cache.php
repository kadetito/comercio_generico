<?php
/* Smarty version 3.1.33, created on 2019-07-08 23:20:55
  from 'C:\AppServ\www\comercio_generico\administrador\templates\perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23b3b74f8979_01213048',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd15280d0e6a048c70ab97694da80cca3e118d6f3' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\perfil.tpl',
      1 => 1562620851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:modales.tpl' => 1,
  ),
),false)) {
function content_5d23b3b74f8979_01213048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1252926455d23b3b7455b04_36313677';
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
 
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   

<div class="container-fluid distanciatop">
<div class="row">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-8">
	    <div>
	        <h3><span class="texticon"><i class="fas fa-folder-plus"></i> Gestionar Perfil</span><span class="icontext"><i class="fas fa-folder-plus fa-2x"></i></span></h3>
	        <section>       
	          <h4 class="displaywhen">Accediendo...<div id="resultados"></div></h4>
	          <h5>Área de gestión y configuración general</h5>
	
	<div class="tabbable mt-5" id="tabs-153692">
					<ul class="nav nav-tabs"  id="myTab">
						<li class="nav-item">
							<a class="nav-link active" href="#panel-792248" data-toggle="tab">Datos del usuario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tab2" data-toggle="tab">Contenidos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tab3" data-toggle="tab">Servidor</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tab4" data-toggle="tab">Dise&ntilde;o</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="panel-792248">
						
						
<div class="row p-5">
	<div class="col-md-12">
	
	
	
	
	
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-store-alt"></i>   Datos del usuario</h5>
				<div class="card-body">
					<form name="edit_product" METHOD="POST" id="edit_product">			
						<div class="row">
							<div class="col-md-6">
								<ul class="card-text">
								<input type="hidden" name="idcliente" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'idcliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" />
								    <li><label for="nomclient">Nombre</label><input required type="text" name="nomclient" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombrecliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
								    <li><label for="dniclient">DNI/NIF</label><input required  type="text" name="dniclient" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'dnicliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
								    <li><label for="usuarinom">Usuari</label><input required  type="text" name="usuarinom" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'Usuariocliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
					
								 </ul>
							</div>
						
							<div class="col-md-6">
								<ul class="card-text">
								    <li><label for="cognomsclient">Apellidos</label><input required  type="text" name="cognomsclient" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'apellidoscliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
								    <li><label for="emailclient">E-mail</label><input required  type="email" name="emailclient" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'Emailcliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
								    <li><label for="usuaripass">Password</label><input  required type="text" name="usuaripass" value="<?php echo '/*%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/<?php echo $_smarty_tpl->tpl_vars[\'Passwordcliente\']->value;?>
/*/%%SmartyNocache:1252926455d23b3b7455b04_36313677%%*/';?>
" class="form-control" /></li>  
					
								 </ul>
							</div>
						</div>								
						<div class="row mt-5">
							<div class="col-md-12 text-center mb-5">
												<input type="submit" name="senddatosmodif" value="Modificar" class="btn btn-primary" />
							</div>
						</div>
					</form>								
				</div>
			</div>
		
								
								
	</div>						
</div>						
						
						</div>
						<div class="tab-pane p-5" id="tab2">
<div class="row">
	<div class="col-md-12">
	
<div class="card-columns">	
	
	
	
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-store-alt"></i>   Tienda/Web</h5>
				<div class="card-body">
						<ul class="card-text">
							<li><a id="m-01" href="#mc-01" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Unidades aplicables</a></li>
							<li><a id="m-02" href="#mc-02" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Asignación de idiomas</a></li>
							<li><a id="m-03" href="#mc-03" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Asignación de impuestos</a></li>
							<li><a id="m-04" href="#mc-04" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Analytics</a></li>
							<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Documentos legales</a></li>
						</ul>
				</div>
			</div>
	
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-flag"></i>   Configurar idiomas</h5>
				<div class="card-body">
					<ul class="card-text">
							<li><a id="m-06" href="#mc-06" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Edición de idiomas</a></li>
							<li><a id="m-07" href="#mc-07" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Añadir idioma</a></li>
					</ul>
				</div>
			</div>
	
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-credit-card"></i>   Plataformas de pago y entrega</h5>
				<div class="card-body">
					<ul class="card-text">
						<li><a id="m-08" href="#mc-08" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Editar plataformas de pago</a></li>
						<li><a id="m-09" href="#mc-09" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Añadir plataformas de pago</a></li>
						<li><a id="m-10" href="#mc-10" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Editar empresas de entrega</a></li>
						<li><a id="m-11" href="#mc-11" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Añadir empresas de entrega</a></li>
					</ul>					
				</div>
			</div>
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-tags"></i>   Gestión de productos</h5>
				<div class="card-body">
					<ul class="card-text">
						<li><a id="m-12" href="#mc-12" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Categorías</a></li>
						<li><a id="m-13" href="#mc-13" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Productos</a></li>
						<li><a id="m-14" href="#mc-14" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Ofertas especiales</a></li>
					</ul>
				</div>
			</div>

			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-star"></i>   Promoción y difusión</h5>
				<div class="card-body">
					<ul class="card-text">
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> SEO/SEM</a></li>
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Promociones</a></li>
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Banners</a></li>
					</ul>
				</div>
			</div>
				
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-user-tag"></i>   Clientes y pedidos</h5>
				<div class="card-body">
					<ul class="card-text">
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Gestión de clientes</a></li>
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Supervisión de pedidos</a></li>
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Devoluciones</a></li>
						<li><a id="m-05" href="#mc-05" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Facturas</a></li>
					</ul>
				</div>
			</div>
	
			<div class="card text-white bg-danger">
				<h5 class="card-header"><i class="fas fa-comments"></i>   Comunicaciones</h5>
				<div class="card-body">
					<ul class="card-text">
						<li><a id="m-21" href="#mc-21" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Mensajes</a></li>
						<li><a id="m-22" href="#mc-22" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Correos</a></li>
						<li><a id="m-23" href="#mc-23" role="button" data-toggle="modal"><i class="fas fa-arrow-alt-circle-right"></i> Log de actividad</a></li>
					</ul>
				</div>
			</div>			
			
			
			
			
			
</div>				
	</div>						
</div>		
						</div>
						<div class="tab-pane" id="tab3">
							<p>
								Howdy, I'm in Section 3.
							</p>
						</div>
						<div class="tab-pane" id="tab4">
							<p>
								Howdy, I'm in Section 4.
							</p>
						</div>
					</div>
				</div>
	
	
	        </section>  
	</div>
</div>
<div class="col-md-2">&nbsp;</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
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
		$('#myTab a').click(function(e) {
		  e.preventDefault();
		  $(this).tab('show');
		});
		// store the currently selected tab in the hash value
		$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
		  var id = $(e.target).attr("href").substr(1);
		  window.location.hash = id;
		});
		// on load of the page: switch to the currently selected tab
		var hash = window.location.hash;
		$('#myTab a[href="' + hash + '"]').tab('show');
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			
			$(document).ready(function() { 
				$("#mc-01").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-02").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-03").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-04").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-05").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-06").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-07").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-08").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-09").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-10").modal({ show: false, backdrop: 'static',keyboard: false }); 
				$("#mc-11").modal({ show: false, backdrop: 'static',keyboard: false }); 
			}); 
			$(document).ready(function() {
				$('#mc-01').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-02').on('hidden.bs.modal', function () {parent.location.reload();});				
				$('#mc-03').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-04').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-05').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-06').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-07').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-08').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-09').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-10').on('hidden.bs.modal', function () {parent.location.reload();});
				$('#mc-11').on('hidden.bs.modal', function () {parent.location.reload();});
			});
			
			$(document).ready(function(){

				 $('#m-01').click(function(){
				   var id = "1";
				   var splitid = id.split('_');
				   var userid = splitid[1];
				   $.ajax({
				    url: 'test.php',
				    type: 'POST',
				    data: {userid: userid},
				    success: function(response){ 
				      $('.modal-body').html(response);
				      $('#mc-01').modal('show'); 
				    },
			        error:function(request, status, error) {
			            console.log("ajax call went wrong:" + request.responseText);
			        }
				  });
				 });
			});

			
			
			$(document).ready(function(){
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
			
		
		<?php echo '</script'; ?>
>

    </body>
</html><?php }
}
