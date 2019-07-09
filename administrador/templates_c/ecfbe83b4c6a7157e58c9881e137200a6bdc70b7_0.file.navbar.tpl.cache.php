<?php
/* Smarty version 3.1.33, created on 2019-07-09 16:34:43
  from 'C:\AppServ\www\comercio_generico\administrador\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24a6039b6663_21537445',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ecfbe83b4c6a7157e58c9881e137200a6bdc70b7' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\navbar.tpl',
      1 => 1562682677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24a6039b6663_21537445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '302017255d24a6039ae820_81946152';
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Administrador</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbaMenuPerfil" data-toggle="dropdown"><?php echo '/*%%SmartyNocache:302017255d24a6039ae820_81946152%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombrecliente\']->value;?>
/*/%%SmartyNocache:302017255d24a6039ae820_81946152%%*/';?>
 <?php echo '/*%%SmartyNocache:302017255d24a6039ae820_81946152%%*/<?php echo $_smarty_tpl->tpl_vars[\'apellidoscliente\']->value;?>
/*/%%SmartyNocache:302017255d24a6039ae820_81946152%%*/';?>
</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbaMenuPerfil">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> 
							</div>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav><?php }
}
