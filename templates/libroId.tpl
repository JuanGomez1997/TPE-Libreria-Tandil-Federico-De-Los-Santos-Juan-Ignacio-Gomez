{include file="encabezado.tpl"}

{if isset($_SESSION['id'])}
    <div class="container my-4">
        {include file="formularioLibros.tpl"}
    </div>
{/if}

<div class="container mt-5">
    <h2 class="text-center mb-4">Libro</h2>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle shadow-sm">
            <thead class="table-primary text-center">
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Descripción</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$libros item=$libro}
                    <tr>
                        <td class="fw-semibold">{$libro->titulo}</td>
                        <td>{$libro->nombre}</td>
                        <td>{$libro->autor}</td>
                        <td class="text-center">{$libro->anio}</td>
                        <td>{$libro->descripcion}</td>
                        {if $libro->disponibilidad >= 1}
                            <td class="text-success text-center fw-semibold">Disponible ({$libro->disponibilidad})</td>
                        {elseif $libro->disponibilidad eq 0}
                            <td class="text-danger text-center fw-semibold">No Disponible</td>
                        {/if}
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>

{include file="piePagina.tpl"}