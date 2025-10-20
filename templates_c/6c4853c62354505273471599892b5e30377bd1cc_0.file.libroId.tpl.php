<?php
/* Smarty version 4.2.1, created on 2025-10-20 03:59:45
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\libroId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f5979122c163_57576070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4853c62354505273471599892b5e30377bd1cc' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\libroId.tpl',
      1 => 1760925582,
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
function content_68f5979122c163_57576070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id']))) {?>
    <div class="container my-4">
        <?php $_smarty_tpl->_subTemplateRender("file:formularioLibros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Libro</h2>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle shadow-sm">
            <thead class="table-primary text-center">
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Descripción</th>
                    <th>Disponibilidad</th>
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
                        <td class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['libro']->value->anio;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['libro']->value->disponibilidad >= 1) {?>
                            <td class="text-success text-center fw-semibold">Disponible (<?php echo $_smarty_tpl->tpl_vars['libro']->value->disponibilidad;?>
)</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['libro']->value->disponibilidad == 0) {?>
                            <td class="text-danger text-center fw-semibold">No Disponible</td>
                        <?php }?>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
