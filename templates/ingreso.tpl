{include file="encabezado.tpl"}
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 div-login p-4 border rounded shadow">
        <form class="form-login" method="POST" action="accesosesion">
            <div class="form-group">
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" class="form-control" name="usuario" required>
            </div>
            
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" required>
            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark text-white">Iniciar Sesión</button>
            </div>

            {if $error}
                <div class="alert alert-danger mt-3">
                    <p>{$error}</p>
                </div>
            {/if}
        </form>
    </div>
</div>
{include file="piePagina.tpl"}