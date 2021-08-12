<?php

include_once './libs/smarty/libs/Smarty.class.php';

class UserView{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('./templates/main.tpl');
    }

    function showRec($recibo, $liqSit, $liquidacion, $admin, $empleado){
        $this->smarty->assign('recibo', $recibo);
        $this->smarty->assign('liqSit', $liqSit);
        $this->smarty->assign('liq', $liquidacion);
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('empleado', $empleado);
        $this->smarty->display('./templates/recibo.tpl');
    }

    function showEditMyPass(){
        $this->smarty->display('./templates/changePass.tpl');
    }
}