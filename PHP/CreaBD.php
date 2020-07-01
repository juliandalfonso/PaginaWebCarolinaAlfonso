<?php


class CreaBD
{
    public $servidor;
    public $usuario;
    public $contrasena;
    public $nombrebd;
    public $nombretabla;
    public $con;

    //Claseconstructor
    public function __construct(
        $nombrebd ="nuevaBD",
        $nombretabla="Productosbd",
        $servidor="localhost",
        $usuario="root",
        $contrasena="mysql"
    )
    {
        $this->nombrebd = $nombrebd;   
        $this->nombretabla = $nombretabla;   
        $this->servidor = $servidor;   
        $this->usuario = $usuario;   
        $this->contrasena = $contrasena; 

        //crear conexion
        $this->con = mysqli_connect($servidor,$usuario,$contrasena);

        //Check conexion
        if(!$this->con)
        {
            die("Conexion Fallida: ". mysqli_connect_error());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $nombrebd";

        //ejecutamos el query
        if(mysqli_query($this->con,$sql))
        {
            $this->con = mysqli_connect($servidor,$usuario,$contrasena,$nombrebd);
            
            //crear nueva tabla con sql
            $sql ="CREATE TABLE IF NOT EXISTS $nombretabla
                    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    nombre_producto VARCHAR(25) NOT NULL,
                    precio_producto FLOAT,
                    imagen_producto VARCHAR(100));";
            
            if(!mysqli_query($this->con,$sql))
            {
                echo "Creando la tabla: ". mysqli_error($this->con);
            }
            else{
                return false;
            }
        }
    }

    //obtiene productos de la Base de Datos
    public function getData()
    {
        $sql ="SELECT * FROM $this->nombretabla";

        $result =mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result)>0)
        {
            return $result;
        }
    }
}


?>