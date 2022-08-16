<?php
require_once(CORE .'/Model.php');

class LoginModel extends Model {
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_rol;

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function setId($user_id){
        $this->user_id = $user_id
    }
    public function setemail($user_email){
        $this->user_email = $user_email
    }
    public function setpass($user_pass){
        $this->user_pass = $user_pass
    }
    public function setrol($user_rol){
        $this->user_rol = $user_rol
    }
    public function getId()
    {
        return $this->user_id;
    }
    public function getemail()
    {
        return $this->user_email;
    }
    public function getpass()
    {
        return $this->user_pass;
    }
    public function getrol()
    {
        return $this->user_rol;
    }


}