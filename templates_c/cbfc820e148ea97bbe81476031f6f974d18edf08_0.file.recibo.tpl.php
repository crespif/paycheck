<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 17:09:54
  from '/opt/lampp/htdocs/mi-recibo/templates/recibo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0d9c2ebe725_92271215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfc820e148ea97bbe81476031f6f974d18edf08' => 
    array (
      0 => '/opt/lampp/htdocs/mi-recibo/templates/recibo.tpl',
      1 => 1623251324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c0d9c2ebe725_92271215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['empleado']->value->nombre;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['empleado']->value->cuit;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['empleado']->value->ingreso;?>
</td>
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
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['liq']->value->TIPO;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['liq']->value->DESCRIPCION;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['liq']->value->FPAGO;?>
</td>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recibo']->value, 'rec');
$_smarty_tpl->tpl_vars['rec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->do_else = false;
?>
                <tr >
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['rec']->value->codigo;?>
</td>
                    <td class="concepto"><?php echo $_smarty_tpl->tpl_vars['rec']->value->concepto;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['rec']->value->cantidad;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['rec']->value->tipo == 1) {?>
                        <td class="text-end"><?php echo number_format($_smarty_tpl->tpl_vars['rec']->value->valor,2,',','.');?>
</td>
                        <td></td>
                        <td></td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['rec']->value->tipo == 2) {?>
                        <td></td>
                        <td class="text-end"><?php echo number_format($_smarty_tpl->tpl_vars['rec']->value->valor,2,',','.');?>
</td>
                        <td></td>
                    <?php } else { ?>
                        <td></td>
                        <td></td>
                        <td class="text-end"><?php echo number_format($_smarty_tpl->tpl_vars['rec']->value->valor,2,',','.');?>
</td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="3" class="text-center fw-bold"> Totales </td>
                    <td class="text-end fw-bold"> <?php echo number_format($_smarty_tpl->tpl_vars['liqSit']->value->haber,2,',','.');?>
 </td>
                    <td class="text-end fw-bold"> <?php echo number_format($_smarty_tpl->tpl_vars['liqSit']->value->retencion,2,',','.');?>
 </td>
                    <td class="text-end fw-bold"> <?php echo number_format($_smarty_tpl->tpl_vars['liqSit']->value->noremun,2,',','.');?>
 </td>
                </tr>
                <tr class="border border-2">
                    <td colspan="3" class="text-center fw-bold"> Neto a cobrar </td>
                    <td colspan="3" class="text-center fw-bold"> <?php echo number_format($_smarty_tpl->tpl_vars['liqSit']->value->neto,2,',','.');?>
 </td>
                </tr>
            </tfoot>

        </table>
    </div>
    <div class="d-flex justify-content-around mb-2">
        <a href="login" class="btn btn-outline-warning btn-sm">Volver</a>
        <button id="btn-download" type="button" class="btn btn-outline-success btn-sm">Descargar</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
