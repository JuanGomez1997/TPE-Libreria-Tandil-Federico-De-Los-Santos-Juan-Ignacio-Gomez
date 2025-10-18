<?php
/* Smarty version 4.2.1, created on 2025-10-18 10:46:47
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\libroId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f353f76418d0_37993771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4853c62354505273471599892b5e30377bd1cc' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\libroId.tpl',
      1 => 1760773652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:formularioProductos.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_68f353f76418d0_37993771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Genero</th>
                <th scope="col">Autor</th>
                <th scope="col">Año</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->anio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['libro']->value->disponibilidad >= 1) {?>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->disponibilidad;?>
</td>
                <?php } elseif ($_smarty_tpl->tpl_vars['libro']->value->disponibilidad == 0) {?>
                    <td>No Disponible</td>
                <?php }?>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
