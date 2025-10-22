<?php
/* Smarty version 4.2.1, created on 2025-10-22 02:04:19
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\ListadoGeneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f81f83533231_84329856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e252e663778105799371fc360174b13eb44679' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\ListadoGeneros.tpl',
      1 => 1761091446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:formGeneros.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_68f81f83533231_84329856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <h2>Listado de Generos</h2>

    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:formGeneros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php }?>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <a href='libroporgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-outline-primary'>Listado del genero <?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</a>
                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
                            <a href="eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este genero?')">Eliminar</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
