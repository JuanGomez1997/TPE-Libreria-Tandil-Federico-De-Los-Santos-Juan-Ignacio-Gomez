<?php
/* Smarty version 4.2.1, created on 2025-10-22 00:42:00
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f80c38e62cc1_03373560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb0832fd2ce20dd92f80c9c7fd425e2ec9ce4ef' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\generos.tpl',
      1 => 1761086499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_68f80c38e62cc1_03373560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <h2>Listado de Géneros</h2>

    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
        <a href="agregarGenero" class="btn btn-primary mb-3">Agregar Género</a>
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
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</h5>

                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['USER_ID']))) {?>
                            <a href="editarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-warning btn-sm">Editar</a>
                            <a href="eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este género?')">Eliminar</a>
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
}
}
