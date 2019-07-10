<?php
/* Smarty version 3.1.33, created on 2019-07-09 19:59:44
  from 'C:\AppServ\www\comercio_generico\administrador\templates\modales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24d610cd2792_47290040',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3725af39daf9552e2ff4ceefe743050f9098d67a' => 
    array (
      0 => 'C:\\AppServ\\www\\comercio_generico\\administrador\\templates\\modales.tpl',
      1 => 1562691391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24d610cd2792_47290040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9933362815d24d610cbef04_75565802';
?>
<div class="modal fade  " id="mc-01" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content p-5">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Unidades aplicables</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body">
						<p class="sinlence">Estas son las unidades de medida y volumen de las que dispone ahora su tienda/web, puede eliminarlas, <strong>PERO CUIDADO</strong>, los productos asociados a esta unidad quedar&aacute;n sin los valores de los que ya disponen.</p>
							<table class="table table-hover table-sm table-bordered">
								<thead>
									<tr>
										<th>Product</th>
										<th>Payment Taken</th>
									</tr>
								</thead>
								<tbody id="modal-01"></tbody>
							</table>
						<form role="form" class="form-inline ">
						<p class="sinlence">Puede asignar m&aacute;s unidades de medida y/o volumen. Escoja las unidades de medida o volumen que va a utilizar en sus productos, podr&aacute; definirlos en cada uno de ellos luego</p>
								<div class="form-group">
									<label for="id_modali" class="mr-sm-2">Nueva unidad de uso</label>
									<select name="id_modali" class="form-control mr-sm-2"" id="id_modali" required>
									<option value="">Seleccione unidad de medida y/o volumen</option><?php echo '/*%%SmartyNocache:9933362815d24d610cbef04_75565802%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleModalidadesSelect\']->value;?>
/*/%%SmartyNocache:9933362815d24d610cbef04_75565802%%*/';?>
</select> 
								</div>
								<input type="submit" class="btn btn-primary" name="sendModali" />
						</form>
						</div>
					</div>
				</div>
			</div>
<div class="modal fade  " id="mc-02" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Modal title</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>			
<div class="modal fade  " id="mc-03" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Modal title</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>			
<div class="modal fade  " id="mc-04" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Modal title</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>			
<div class="modal fade  " id="mc-05" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Modal title</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>			
<div class="modal fade" id="mc-06" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">Modal title</h5> 
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>			
			
			
			
			
			
			
			
			
			
			
			<?php }
}
