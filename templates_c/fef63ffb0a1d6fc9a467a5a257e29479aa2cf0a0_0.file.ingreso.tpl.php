<?php
/* Smarty version 4.2.1, created on 2025-10-19 07:19:25
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f474dde67024_35735294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fef63ffb0a1d6fc9a467a5a257e29479aa2cf0a0' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\ingreso.tpl',
      1 => 1760850974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_68f474dde67024_35735294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 div-login p-4 border rounded shadow">
        <form class="form-login" method="POST" action="accesosesion">
            <div class="form-group">
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" class="form-control" name="usuario" required>
            </div>
            
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" required>
            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark text-white">Iniciar Sesión</button>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger mt-3">
                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                </div>
            <?php }?>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
