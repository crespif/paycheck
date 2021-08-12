{include 'head.tpl'}

<div class="formu col-sm-4 mx-auto">
    <form class="row g-3" action="recibo" method="POST">
        <div class="encabezado card-header">
            Recibo de sueldos
        </div>
        <div class="input-group">
            <div class="form-floating m-auto">
                <input name="documento" type="number" class="form-control" placeholder="Número de DU">
                <label for="floatingInputValue">Documento</label>
            </div>
            <div class="form-floating m-auto">
                <input name="pass" type="password" class="form-control" placeholder="Contraseña">
                <label for="floatingInputValue">Contraseña</label>
            </div>
        </div>
        <div class="input-group">
            <div class="form-group col-md-3 m-auto">
                <label for="numEmpleado">Legajo</label>
                <input type="text" class="form-control" name="legajo" id="numEmpleado" required>
            </div>
            <div class="form-group col-md-3 m-auto">
                <label for="inputState">Mes</label>
                <input type="number" class="form-control" name="mes" id="mes" min="1" max="12" list="defaultMes" placeholder="MM" required>
                <datalist id="defaultMes">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                    <option value="6">
                    <option value="7">
                    <option value="8">
                    <option value="9">
                    <option value="10">
                    <option value="11">
                    <option value="12">
                </datalist>
            </div>    
            <div class="form-group col-md-3 m-auto">
                <label for="anio">Año</label>
                <input type="number" class="form-control" name="anio" id="anio" min="2018" placeholder="AAAA" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ver recibo</button>
        {if ($error != null)}
            <div class="alert alert-danger text-center" role="alert">
                <strong>¡Error! </strong>{$error}
            </div>  
        {/if}
    </form>
</div>
{include 'footer.tpl'}