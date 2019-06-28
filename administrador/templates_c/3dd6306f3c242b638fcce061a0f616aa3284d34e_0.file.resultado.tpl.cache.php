<?php
/* Smarty version 3.1.33, created on 2019-06-28 21:15:25
  from 'C:\AppServ\www\comercio_generico\administrador\templates\resultado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d16674da5aca7_70368561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd6306f3c242b638fcce061a0f616aa3284d34e' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\resultado.tpl',
      1 => 1561748266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d16674da5aca7_70368561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2466311515d16674d9ed8f5_53371266';
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body>
<div class="container">
    <div>
        <h3><span class="texticon"><i class="fas fa-folder-plus"></i> Nueva tienda</span><span class="icontext"><i class="fas fa-folder-plus fa-2x"></i></span></h3>
        <section>       
          <h4 class="displaywhen">Nueva tienda</h4>
         <div id="modelo"></div>
        </section>       
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



			var id_tien='';
		
		$.ajax({
			
		    url:'workers/resultado.worker.php',
		    data: {
		    	id_tien: id_tien
		    }, 
		    success:function(result) { 
		      $( "#modelo" ).html(result);   
		    }
		});
		});
		

<?php echo '</script'; ?>
>
    </body>
</html><?php }
}
