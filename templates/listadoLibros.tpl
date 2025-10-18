{include file="encabezado.tpl"}

    {include file="formularioLibros.tpl"}

<div class="container mt-5">
    <div class="row">
        {foreach from=$libros item=$libro}
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title">{$libro->titulo}</h5>
                        <p class="card-text text-muted" >Autor:{$libro->autor}</p>
                        <p class="card-text text-muted" >Genero:{$libro->genero_id}</p>
                        <a href="eliminarlibro/{$libro->id_libro}" class="btn btn-outline-danger">Eliminar</a>
                        <a href="verlibro/{$libro->id_libro}" class="btn btn-outline-success">Ver Libro</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}