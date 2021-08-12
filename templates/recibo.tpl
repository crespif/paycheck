{include 'head.tpl'}

<div class="container col-md-6">  
    <div id="recibo">

        <div class="titulo d-flex align-items-end mb-2">
            <img class="logo" width=150px src="./img/logocelta.png" alt="logo de celta">
            <div class="informacion ms-3">
                <p class="denominacion">Coop de Obras, Serv. P&uacute;blicos y Serv. Sociales ltda.</p>
                <p class="m-0">Sarmiento 411</p>
                <p class="infocoop">02983-426103</p>
                <p class="infocoop">30-54569092-2</p>
            </div>
        </div>

        <table class="table table-sm border-0 mb-0">
            <thead>
                <tr>
                    <th class="text-center">Nombre y Apellido</th>
                    <th class="text-center">CUIT</th>
                    <th class="text-center">Fecha ingreso</th>
                <tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{$empleado->nombre}</td>
                    <td class="text-center">{$empleado->cuit}</td>
                    <td class="text-center">{$empleado->ingreso}</td>
                </tr>
            <tbody>
        </table>

        <table class="table table-sm border-0">
            <thead>
                <tr>
                    <th class="text-center">Tipo liquidacion</th>
                    <th class="text-center">Periodo</th>
                    <th class="text-center">Fecha pago</th>
                <tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{$liq->TIPO}</td>
                    <td class="text-center">{$liq->DESCRIPCION}</td>
                    <td class="text-center">{$liq->FPAGO}</td>
                </tr>
            <tbody>
        </table>
    
        <table class="table table-sm">
            <thead class="thead-light bg-secondary bg-gradient">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col" class="concepto">Concepto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col" class="valores text-center">Haberes</th>
                    <th scope="col" class="valores text-center">Retencion</th>
                    <th scope="col" class="valores text-center">NoRemun.</th>
                </tr>
            </thead>

            <tbody>
            {foreach from=$recibo item=rec}
                <tr >
                    <td class="text-center">{$rec->codigo}</td>
                    <td class="concepto">{$rec->concepto}</td>
                    <td class="text-center">{$rec->cantidad}</td>
                    {if $rec->tipo == 1}
                        <td class="text-end">{$rec->valor|number_format:2:',':'.'}</td>
                        <td></td>
                        <td></td>
                    {elseif $rec->tipo == 2}
                        <td></td>
                        <td class="text-end">{$rec->valor|number_format:2:',':'.'}</td>
                        <td></td>
                    {else}
                        <td></td>
                        <td></td>
                        <td class="text-end">{$rec->valor|number_format:2:',':'.'}</td>
                    {/if}
                </tr>
            {/foreach}
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="3" class="text-center fw-bold"> Totales </td>
                    <td class="text-end fw-bold"> {$liqSit->haber|number_format:2:',':'.'} </td>
                    <td class="text-end fw-bold"> {$liqSit->retencion|number_format:2:',':'.'} </td>
                    <td class="text-end fw-bold"> {$liqSit->noremun|number_format:2:',':'.'} </td>
                </tr>
                <tr class="border border-2">
                    <td colspan="3" class="text-center fw-bold"> Neto a cobrar </td>
                    <td colspan="3" class="text-center fw-bold"> {$liqSit->neto|number_format:2:',':'.'} </td>
                </tr>
            </tfoot>

        </table>
    </div>
    <div class="d-flex justify-content-around mb-2">
        <a href="login" class="btn btn-outline-warning btn-sm">Volver</a>
        <button id="btn-download" type="button" class="btn btn-outline-success btn-sm">Descargar</button>
    </div>
</div>
{include 'footer.tpl'}