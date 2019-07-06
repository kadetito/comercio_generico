<?php
/* Smarty version 3.1.33, created on 2019-07-06 16:28:44
  from 'C:\AppServ\www\comercio_generico\administrador\templates\perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d20b01c0eeee0_52187680',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd15280d0e6a048c70ab97694da80cca3e118d6f3' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\perfil.tpl',
      1 => 1562270534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5d20b01c0eeee0_52187680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4424282465d20b01c0911e5_78458516';
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
        <link href="estilos/2bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/main.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body>
 

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   

<div class="container distanciatop">
    <div>
        <h3><span class="texticon"><i class="fas fa-folder-plus"></i> Gestionar Perfil</span><span class="icontext"><i class="fas fa-folder-plus fa-2x"></i></span></h3>
        <section>       
          <h4 class="displaywhen">Accediendo...</h4>
          <h5>Área de gestión y configuración general</h5>



<div class="tabbable mt-5" id="tabs-153692">
				<ul class="nav nav-tabs">
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
						<ul>
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombrecliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
     </li>  
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'apellidoscliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
  </li>  
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'dnicliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
        </li>  
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'Emailcliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
      </li>  
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'Usuariocliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
    </li>  
						    <li><?php echo '/*%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/<?php echo $_smarty_tpl->tpl_vars[\'Passwordcliente\']->value;?>
/*/%%SmartyNocache:4424282465d20b01c0911e5_78458516%%*/';?>
   </li>  
						</ul>
					</div>
					<div class="tab-pane" id="tab2">
						<p>
							Howdy, I'm in Section 2.
						</p>
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
		<?php echo '<script'; ?>
 src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="javascript/jquery.cookie-1.3.1.js"><?php echo '</script'; ?>
>	
	
		
    </body>
</html><?php }
}
