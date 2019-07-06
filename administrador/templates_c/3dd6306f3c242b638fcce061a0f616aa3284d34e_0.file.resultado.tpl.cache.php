<?php
/* Smarty version 3.1.33, created on 2019-07-04 22:09:00
  from 'C:\AppServ\www\comercio_generico\administrador\templates\resultado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e5cdc6570d3_55378345',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3dd6306f3c242b638fcce061a0f616aa3284d34e' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\resultado.tpl',
      1 => 1562270539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e5cdc6570d3_55378345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17329243455d1e5cdc5c7417_74852101';
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body>
<div class="container fghj">
    <div>
        <h3><span class="texticon"><i class="fas fa-folder-plus"></i> Nueva tienda</span><span class="icontext"><i class="fas fa-folder-plus fa-2x"></i></span></h3>
        <section> 
        
        <?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'errorLocalizado\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
      
          <h4 class="displaywhen">Nueva tienda</h4>
          
          
          <h5>Esta es la configuración elegida para su tienda. Recuerde que algunas características las puede modificar desde su menú de administración.</h5>
          
   <div class="row">
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">ID de la tienda</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'idtienda\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<h5 class="card-header">Nombre</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'tiendanombre\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>       
    <div class="row">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Tipo: </h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombretipotienda\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Fecha de alta</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Fechaalta\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>                
    <div class="row">
		<div class="col-md-8">
			<div class="card">
				<h5 class="card-header">Nombre Propietario</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombrecliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
 <?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'apellidoscliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">DNI</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'dnicliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>                
    <div class="row">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Email: </h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Emailcliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Dominio</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Dominio\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>           
    <div class="row">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Usuario</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Usuariocliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Password</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Passwordcliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>      
	
	
	      
     <div class="row">
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">Uso de friendly URL</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Friendly\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">Protocolo preferente</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Protocolopreferente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">Servidor</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Rutaservidor\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">Uso de prefijo www</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Usowww\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>            
      <div class="row">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Estructura</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Nombreestructura\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Estilo</h5>
				<div class="card-body">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'Nombreestil\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>           
          
       <div class="row">
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">Idiomas</h5>
				<div class="card-body minj">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleIdiomas\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">Formas de pago</h5>
				<div class="card-body minj">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'buclePagos\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">Modalidades</h5>
				<div class="card-body minj">
					<p class="card-text"><?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleModalidades\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
</p>
				</div>
			</div>
		</div>
	</div>                 
   
        <div class="row m-5">
		<div class="col-md-6 text-center">
			<input type="button" name="cancelar" id="cancelar" value="Cancelar" class="btn btn-lng  btn-primary" />
		</div>
		<div class="col-md-6 text-center">
			<input type="button" name="confirmar"  id="confirmar" value="Confirmar" class="btn btn-lng btn-primary" />
		</div>
	</div>         
	       
        </section>       
</div>
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
		var bar = "bar";
	$("#cancelar").click(function() { 
		  var foo=bar;
		  if ( foo == "bar" ) {
		    var isGood=confirm('Se dispone a cancelar su tienda, puede volver a crearla de nuevo si lo desea');
		    if (isGood) {
		    	var id_tien="<?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'idtienda\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
";	
		        var xmlhttp = new XMLHttpRequest();
		        xmlhttp.open("GET", "workers/cancelar.worker.php?id_tien=" + id_tien, true);
		        xmlhttp.send();
				
		        window.location.href = "index.php";
				
		    } else {
		      alert('Pulse, el botón de confirmacion para crear su tienda');
		    }
		  }
	});

		var bart = "bart";
		$("#confirmar").click(function() { 
			  var foot=bart;
			  if ( foot == "bart" ) {
			    var isGoodt=confirm('Su tienda será creada a continuación');
			    if (isGoodt) {
			    	var id_tien="<?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'idtienda\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
";	
			    	var dni="<?php echo '/*%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/<?php echo $_smarty_tpl->tpl_vars[\'dnicliente\']->value;?>
/*/%%SmartyNocache:17329243455d1e5cdc5c7417_74852101%%*/';?>
";	
			    	var _0xc9ac=["\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72"];var rnd=Math[_0xc9ac[1]]((Math[_0xc9ac[0]]()* 100000)+ 1);var rnd2=Math[_0xc9ac[1]]((Math[_0xc9ac[0]]()* 100000)+ 1)
			    	var _0x1913=["\x47\x45\x54","\x77\x6F\x72\x6B\x65\x72\x73\x2F\x75\x70\x64\x61\x74\x65\x2E\x77\x6F\x72\x6B\x65\x72\x2E\x70\x68\x70\x3F\x69\x64\x5F\x74\x69\x65\x6E\x3D","\x6F\x70\x65\x6E","\x73\x65\x6E\x64"];var xmlhttp= new XMLHttpRequest();xmlhttp[_0x1913[2]](_0x1913[0],_0x1913[1]+ id_tien,true);xmlhttp[_0x1913[3]]()
			    	var _0x5eff=["\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6C\x6F\x67\x69\x6E\x5F\x61\x75\x74\x6F\x2E\x70\x68\x70\x3F\x66\x72\x65\x73\x68\x74\x6F\x6B\x6E\x3D"];window[_0x5eff[1]][_0x5eff[0]]= _0x5eff[2]+ rnd+ dni+ rnd2					
			    } else {
			      alert('Pulse, el botón de confirmacion para crear su tienda');
			    }
			  }
		});
	});
	
<?php echo '</script'; ?>
>
    </body>
</html><?php }
}
