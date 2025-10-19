<?php
/* Smarty version 4.2.1, created on 2025-10-19 06:17:57
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\formularioLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f466758f18b7_50434345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77859a2c4309395dbdf69d6cecfc9d46944289ca' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\formularioLibros.tpl',
      1 => 1760847468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f466758f18b7_50434345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-card">
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <h2> Agregar Libro Nuevo</h2>
        <form class="row g-3 needs-validation" method='POST' action='agregarlibro'>
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <h2> Editar Libro</h2>
        <form class="row g-3 needs-validation" method='POST' action='editarlibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
    <?php }?>
        <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control"  name='titulo' placeholder="Nombre del Libro">
        </div>
        <div class="form-group">
            <label for="genero">Genero:</label>
            <select class="form-control" name="genero">
            <option value="">Seleccionar Genero</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name='autor' placeholder="Autor del libro">
        </div>
        <div class="form-group">
            <label for="anio">Fecha de edicion:</label>
            <input type="date" class="form-control"  name='anio' placeholder="Fecha de edicion">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control"  name='descripcion' placeholder="Descripcion">
        </div>
        
        <div class="form-group">
            <label for="disponibilidad">Disponibilidad</label>
            <input type="number" class="form-control"  name='disponibilidad' placeholder="Disponibilidad 0/1">
        </div>
        
        <div  class="col-12 text-center">
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </form>
</div><?php }
}
