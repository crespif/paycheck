<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 16:49:19
  from '/opt/lampp/htdocs/wbseditpage/templates/changePass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0d4efa70f50_07343028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff9c38782f5c9349ca7ed23c96f1c67e3c63d1b' => 
    array (
      0 => '/opt/lampp/htdocs/wbseditpage/templates/changePass.tpl',
      1 => 1623243668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0d4efa70f50_07343028 (Smarty_Internal_Template $_smarty_tpl) {
?><aside class="position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center">
    <div class="confirmacion-texto bg-white p-5 rounded-left rounded-right">
        <h3>Cambiar Contraseña</h3>
        <form action="updateCategory" method="POST">
            <input type="text" class="form-control mb-2" name="nameCategory" id="nameCategory" required>
            <button type="sumbit" class="btn btn-outline-warning btn-sm">Modificar</button>
            <a type="button" class="btn btn-outline-info btn-sm" href="manageCategory">Cancelar</a>
        </form>
    </div> 
</aside><?php }
}
