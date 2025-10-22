<?php
/* Smarty version 4.2.1, created on 2025-10-22 02:03:40
  from 'D:\cosa\htdocs\web2025\TPE\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\templates\formGeneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68f81f5c2945d2_46235576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c51187de85db3e19c8c9a7448308236b531c76c' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2025\\TPE\\TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez\\templates\\formGeneros.tpl',
      1 => 1761091410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f81f5c2945d2_46235576 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-5">
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <h3 class="text-center mb-4">Agregar genero Nuevo</h3>
        <form method="POST" action="guardarGenero">
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <h3 class="text-center mb-4">Editar genero</h3>
        <form method="POST" action="actualizarGenero/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>
        <div class="mb-3">
            <label class="form-label">Nombre del Género</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['genero']->value->nombre ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
        </div>

        <button type="submit" class="btn btn-success">
            Guardar
        </button>
        
    </form>
</div>

<?php }
}
