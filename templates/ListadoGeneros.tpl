{include file="encabezado.tpl"}

<div class="container mt-5">
    <h2>Listado de Generos</h2>

    {if isset($_SESSION['id'])}
        {include file="formGeneros.tpl"} 
    {/if}

    <div class="row">
        {foreach from=$generos item=$genero}
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <a href='libroporgenero/{$genero->id_genero}' type='button' class='btn btn-outline-primary'>Listado del genero {$genero->nombre}</a>
                        {if isset($_SESSION['id'])}
                            <a href="eliminarGenero/{$genero->id_genero}" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este genero?')">Eliminar</a>
                        {/if}
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}

