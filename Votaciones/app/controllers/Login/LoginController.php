<?php
require_once(PATH_MODELS .'/Login/LoginModel.php');

class LoginController extends Controller {

    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function login($params){
        $validate = $this->loginModel->validate($params);

        if($validate == "Administrador"){
            header("Location: ". FOLDER_PATH . "/Pagina_Administrador");
        }elseif($validate == "Estudiante"){
            header("Location: ". FOLDER_PATH . "/Votaciones");
        }{
            echo "Error en la información";
        }
    }

    public function exec(){
       
        $this->render(__CLASS__);
    }

}