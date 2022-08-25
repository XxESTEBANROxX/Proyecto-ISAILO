<?php
require_once(CORE .'/Model.php');

class LoginModel extends Model {
    private $codigo;
    private $nombre;
    private $curso;
    private $rol;

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function validate($params){
        $stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE codigo_institucional = :codigo_institucional AND nombre = :nombre AND curso = :curso AND rol = :rol" );

        $stm->execute($params);

        $data = $stm->fetch();

        if($data){
            $this->codigo = $data ["codigo_institucional"];
            $this->nombre = $data ["nombre"];
            $this->curso = $data ["curso"];
            $this->rol = $data ["rol"];
            
            if($this->rol == "Administrador"){
                return "Administrador";
            }elseif($this->rol == "Estudiante"){
                return "Estudiante";
            }



        }
    }

}