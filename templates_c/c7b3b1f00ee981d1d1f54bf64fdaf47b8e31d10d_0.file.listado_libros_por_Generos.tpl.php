<?php
/* Smarty version 4.2.1, created on 2025-10-22 02:03:15
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\listado_libros_por_Generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f81f43ac1684_10695932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7b3b1f00ee981d1d1f54bf64fdaf47b8e31d10d' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\listado_libros_por_Generos.tpl',
      1 => 1761091393,
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
function content_68f81f43ac1684_10695932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?> 
    <?php $_smarty_tpl->_subTemplateRender("file:formGeneros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }?> 

<div class="container mt-5">
    <h1 class="titulo text-center mb-4">Lista de libros con el género <span class="texto"><?php echo $_smarty_tpl->tpl_vars['generos']->value->nombre;?>
</span></h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</h5>
                        <p class="card-text text-muted">Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</p>
                        <p class="card-text text-muted">Género: <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</p>
                        <a href="verlibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
" class="btn btn-outline-success">Ver Libro</a>
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
