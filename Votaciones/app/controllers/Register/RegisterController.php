<?php
require_once(PATH_MODELS .'/Register/RegisterModel.php');

class RegisterController extends Controller {
    public function exec(){
        $this->render(__CLASS__);
    }

}