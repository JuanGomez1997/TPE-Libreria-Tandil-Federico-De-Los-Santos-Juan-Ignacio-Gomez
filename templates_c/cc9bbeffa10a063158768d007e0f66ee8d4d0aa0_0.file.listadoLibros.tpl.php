<?php
/* Smarty version 4.2.1, created on 2025-10-19 07:38:35
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\listadoLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f4795b507668_52209975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9bbeffa10a063158768d007e0f66ee8d4d0aa0' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\listadoLibros.tpl',
      1 => 1760852311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:formularioLibros.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_68f4795b507668_52209975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioLibros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="container mt-5">
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
                        <p class="card-text text-muted" >Autor:<?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</p>
                        <p class="card-text text-muted" >Genero:<?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</p>
                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
                            <a href="eliminarlibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
" class="btn btn-outline-danger">Eliminar</a>
                        <?php }?>
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
