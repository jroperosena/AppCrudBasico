<?php    // CRUD A LA BASE DE DATOS

require 'conexion.php';



class servicioDatos extends Conexion
{

    public function __construct() {
        parent::__construct();
    }


    public function obtenerUsuarios() {

        $consulta= $this->conexion->query('SELECT * FROM usuario');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;

    }


    public function crearUsuario($codigo, $nombre, $correo, $contrasena) {

        $sql ="INSERT INTO usuario (codigo, nombre, correo, contrasena ) VALUES('".$codigo."','".$nombre."','".$correo."','".$contrasena."')";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }

    }

    public function validarCodigo($codigo) {
         $consulta= $this->conexion->query("SELECT * FROM usuario where codigo='".$codigo."'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado)
           return true;
           else
           return false;

    }


    public function consultarUsuario($codigo) {
        $consulta= $this->conexion->query("SELECT * FROM usuario where codigo='".$codigo."'");
       $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
       $this->conexion->close();
       return $resultado;

    }

    
    public function actualizarUsuario($codigo, $nombre, $correo, $contrasena) { 
        $sql = "UPDATE usuario SET nombre = '".$nombre."', correo = '".$correo."' ,  contrasena = '".$contrasena."' WHERE codigo = '".$codigo."'  ";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }


    public function borrarUsuario($codigo) { 
        $sql = "DELETE FROM usuario WHERE codigo = '".$codigo."'";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }

    


}


?>