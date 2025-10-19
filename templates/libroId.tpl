{include file="encabezado.tpl"}
{if isset($_SESSION['id'])}
    {include file="formularioLibros.tpl"}
{/if}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Genero</th>
                <th scope="col">Autor</th>
                <th scope="col">Año</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=$libro}
            <tr>
                <th scope="row">{$libro->titulo}</th>
                <td>{$libro->nombre}</td>
                <td>{$libro->autor}</td>
                <td>{$libro->anio}</td>
                <td>{$libro->descripcion}</td>
                {if $libro->disponibilidad >= 1}
                    <td>{$libro->disponibilidad}</td>
                {elseif $libro->disponibilidad eq 0}
                    <td>No Disponible</td>
                {/if}
            </tr>
            {/foreach}
        </tbody>
    </table>
{include file="piePagina.tpl"}