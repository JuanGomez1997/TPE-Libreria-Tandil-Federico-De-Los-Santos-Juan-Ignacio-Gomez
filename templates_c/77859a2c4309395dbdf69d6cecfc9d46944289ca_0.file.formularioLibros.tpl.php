<?php
/* Smarty version 4.2.1, created on 2025-10-20 04:01:25
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\formularioLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f597f5db8212_25426954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77859a2c4309395dbdf69d6cecfc9d46944289ca' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\formularioLibros.tpl',
      1 => 1760925681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f597f5db8212_25426954 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow p-4">
                <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                    <h3 class="text-center mb-4">Agregar Libro Nuevo</h3>
                    <form method="POST" action="agregarlibro">
                <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                    <h3 class="text-center mb-4">Editar Libro</h3>
                    <form method="POST" action="editarlibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <?php }?>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Nombre del libro">
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-select" name="genero">
                            <option value="">Seleccionar género</option>
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

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" placeholder="Autor del libro">
                    </div>

                    <div class="mb-3">
                        <label for="anio" class="form-label">Fecha de edición</label>
                        <input type="date" class="form-control" name="anio">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Breve descripción">
                    </div>

                    <div class="mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <input type="number" class="form-control" name="disponibilidad" placeholder="0 o 1">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-4">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
