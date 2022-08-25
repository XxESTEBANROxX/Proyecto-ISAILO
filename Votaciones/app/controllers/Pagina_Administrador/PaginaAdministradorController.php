<?php
require_once(PATH_MODELS .'/Pagina_Administrador/PaginaAdministradorModel.php');

class HomeAdminController extends Controller {

    private $homeadminModel;
    
    public function __construct(){
        $thiis->homeadminModel = new HomeAdminModel();
    }

    public function exec(){
        $this->render(__CLASS__);
    }
}