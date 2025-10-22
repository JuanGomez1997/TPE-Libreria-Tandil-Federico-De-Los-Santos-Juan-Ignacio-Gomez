{include file="encabezado.tpl"}

{if isset($_SESSION['id'])} 
    {include file="formGeneros.tpl"} 
{/if} 

<div class="container mt-5">
    <h1 class="titulo text-center mb-4">Lista de libros con el género <span class="texto">{$generos->nombre}</span></h1>
    <div class="row">
        {foreach from=$libros item=$libro}
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title">{$libro->titulo}</h5>
                        <p class="card-text text-muted">Autor: {$libro->autor}</p>
                        <p class="card-text text-muted">Género: {$libro->nombre}</p>
                        <a href="verlibro/{$libro->id_libro}" class="btn btn-outline-success">Ver Libro</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}