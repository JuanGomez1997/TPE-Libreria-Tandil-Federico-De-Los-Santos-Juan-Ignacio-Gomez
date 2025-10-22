

<div class="container mt-5">
    {if $opcion eq 'agregar'}
        <h3 class="text-center mb-4">Agregar genero Nuevo</h3>
        <form method="POST" action="guardarGenero">
    {elseif $opcion eq 'editar'}
        <h3 class="text-center mb-4">Editar genero</h3>
        <form method="POST" action="actualizarGenero/{$id}">
    {/if}
        <div class="mb-3">
            <label class="form-label">Nombre del Género</label>
            <input type="text" name="nombre" class="form-control" value="{$genero->nombre|default:''}" required>
        </div>

        <button type="submit" class="btn btn-success">
            Guardar
        </button>
        
    </form>
</div>

