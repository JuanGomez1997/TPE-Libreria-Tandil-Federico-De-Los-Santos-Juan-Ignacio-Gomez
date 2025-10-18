<div class="form-card">
    {if $opcion eq 'agregar'}
        <h2> Agregar Libro Nuevo</h2>
        <form class="row g-3 needs-validation" method='POST' action='agregarlibro'>
    {elseif $opcion eq 'editar'}
        <h2> Editar Libro</h2>
        <form class="row g-3 needs-validation" method='POST' action='editarlibro/{$id}'>
    {/if}
        <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control"  name='titulo' placeholder="Nombre del Libro">
        </div>
        <div class="form-group">
            <label for="genero">Genero:</label>
            <select class="form-control" name="genero">
            <option value="">Seleccionar Genero</option>
            {foreach from=$generos item=$genero}
                <option value="{$genero->id_genero}">{$genero->nombre}</option>
            {/foreach}
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
            <input type="text" class="form-control"  name='categoria' placeholder="Descripcion">
        </div>
        
        <div class="form-group">
            <label for="disponibilidad">Disponibilidad</label>
            <input type="number" class="form-control"  name='marca' placeholder="Disponibilidad 0/1">
        </div>
        
        <div  class="col-12 text-center">
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </form>
</div>