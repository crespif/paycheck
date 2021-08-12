<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 17:09:47
  from '/opt/lampp/htdocs/mi-recibo/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0d9bbaca007_26803991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '119895d972ae509c7975a7fa460b19818fc10d49' => 
    array (
      0 => '/opt/lampp/htdocs/mi-recibo/templates/main.tpl',
      1 => 1622047260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c0d9bbaca007_26803991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <?php if (($_smarty_tpl->tpl_vars['error']->value != null)) {?>
            <div class="alert alert-danger text-center" role="alert">
                <strong>¡Error! </strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>  
        <?php }?>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
