<?php
/* Smarty version 3.1.33, created on 2019-07-08 23:20:55
  from 'C:\AppServ\www\comercio_generico\administrador\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23b3b7538c93_69121054',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ecfbe83b4c6a7157e58c9881e137200a6bdc70b7' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\navbar.tpl',
      1 => 1562424332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d23b3b7538c93_69121054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2173066265d23b3b752b666_80490950';
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Brand</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link " href="#">Link</a>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbaMenuPerfil" data-toggle="dropdown"><?php echo '/*%%SmartyNocache:2173066265d23b3b752b666_80490950%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombrecliente\']->value;?>
/*/%%SmartyNocache:2173066265d23b3b752b666_80490950%%*/';?>
 <?php echo '/*%%SmartyNocache:2173066265d23b3b752b666_80490950%%*/<?php echo $_smarty_tpl->tpl_vars[\'apellidoscliente\']->value;?>
/*/%%SmartyNocache:2173066265d23b3b752b666_80490950%%*/';?>
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
