<?php

include_once 'app/view/UserView.php';
include_once 'app/model/recibos.model.php';
include_once 'app/model/user.model.php';

Class UserController{
    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new RecibosModel();
        $this->modelUser = new UserModel();
    }

    public function login(){
      $this->view->showLogin();
    }

    public function verRecibo(){
        if(isset($_POST["legajo"]) && isset($_POST["documento"]) && isset($_POST["pass"]))
            $usuario = $this->modelUser->getUser($_POST["legajo"],$_POST["documento"], $_POST["pass"]);
        else $usuario = null;
        if($usuario){
            if (!(isset($_POST["legajo"]) && isset($_POST["mes"]) && isset($_POST["anio"]))){
                $this->view->showLogin("Debe todos completar los campos");    
            } else {
                $legajo = $usuario->legajo;
                $empleado = $this->model->getEmpleado($usuario->legajo);
                $admin = $usuario->admin;
                $mes = $_POST["mes"];
                $anio = $_POST["anio"]; 
                $recibo = $this->model->getRecibo($legajo, $mes, $anio);
                if($recibo){
                    $liqSit = $this->model->getTotales($recibo[0]->legajo, $mes, $anio);
                    $tipoLiq = $this->model->tipoLiq($recibo[0]->numero);
                    $this->view->showRec($recibo, $liqSit, $tipoLiq, $admin, $empleado);
                } else {
                    $this->view->showLogin("No existe recibo para ese periodo");
                }
            }
        } else {
            $this->view->showLogin("Error al ingresar sus datos");
        }
    }

    public function formMyPass(){
        $this->view->showEditMyPass();
    }
}