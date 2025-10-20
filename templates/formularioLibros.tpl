<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow p-4">
                {if $opcion eq 'agregar'}
                    <h3 class="text-center mb-4">Agregar Libro Nuevo</h3>
                    <form method="POST" action="agregarlibro">
                {elseif $opcion eq 'editar'}
                    <h3 class="text-center mb-4">Editar Libro</h3>
                    <form method="POST" action="editarlibro/{$id}">
                {/if}

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Nombre del libro">
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-select" name="genero">
                            <option value="">Seleccionar género</option>
                            {foreach from=$generos item=$genero}
                                <option value="{$genero->id_genero}">{$genero->nombre}</option>
                            {/foreach}
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
</div>