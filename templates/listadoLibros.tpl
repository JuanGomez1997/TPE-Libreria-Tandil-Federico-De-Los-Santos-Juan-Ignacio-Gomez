{include file="encabezado.tpl"}
{if isset($_SESSION['id'])}
    {include file="formularioLibros.tpl"}
{/if}
<div class="container mt-5">
    <div class="row">
        {foreach from=$libros item=$libro}
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title">{$libro->titulo}</h5>
                        <p class="card-text text-muted" >Autor:{$libro->autor}</p>
                        <p class="card-text text-muted" >Genero:{$libro->nombre}</p>
                        {if isset($_SESSION['id'])}
                            <a href="eliminarlibro/{$libro->id_libro}" class="btn btn-outline-danger">Eliminar</a>
                        {/if}
                        <a href="verlibro/{$libro->id_libro}" class="btn btn-outline-success">Ver Libro</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}