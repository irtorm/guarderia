<?php
include("conexion.php");
class Datos extends Conexion
{
  /*################################################  Registros   ##########################################################*/
                                                                                //metodo que registrara el nombre de las personas
    static public function guardarPersona($datosModelo,$tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;
    
        $consulta = Conexion::Conectar()->prepare("INSERT INTO $tabla(nombre,
        primer_apellido,
        segundo_apellido,
        hora,
        fecha,
        activo)
        VALUES(
            :nombres,
            :apellido1,
            :apellido2,
            :hora,
            :fecha,
            :activo
        )");

        $consulta -> bindParam(':nombres',      $datosModelo["0"],               PDO::PARAM_STR);
        $consulta -> bindParam(':apellido1',    $datosModelo["1"],                 PDO::PARAM_STR);
        $consulta -> bindParam(':apellido2',    $datosModelo["2"],                PDO::PARAM_STR);
        $consulta -> bindParam(':hora',         $hora,                                        PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',        $fecha,                                     PDO::PARAM_STR);
        $consulta -> bindParam(':activo',       $activo,                                    PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();

    }

                                                            //Metodo que registra el parentesco o relacion con el nino

    static public function guardarTipoFamiliar($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (tipo_familiar,
        hora,
        fecha,
        activo
        )
        VALUES(
        :familiar,
        :hora,
        :fecha,
        :activo
        )");

        $consulta -> bindParam(':familiar',      $datosModelo["0"],        PDO::PARAM_STR);
        $consulta -> bindParam(':hora',          $hora,                    PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',         $fecha,                   PDO::PARAM_STR);
        $consulta -> bindParam(':activo',        $activo,                  PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }
                                                                        //metodo que registra al niño

    static public function guardarNino($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (num_matricula,
        fecha_nacimiento,
        fecha_ingreso,
        hora,
        fecha,
        activo,
        fk_persona
        )
        VALUES(
        :numeroMatricula,
        :fechaNacimiento,
        :fechaIngreso,
        :hora,
        :fecha,
        :activo,
        :persona
        )");

        $consulta -> bindParam(':numeroMatricula',  $datosModelo["0"],    PDO::PARAM_STR);
        $consulta -> bindParam(':fechaNacimiento',  $datosModelo["1"],    PDO::PARAM_STR);
        $consulta -> bindParam(':fechaIngreso',     $datosModelo["2"],    PDO::PARAM_STR);
        $consulta -> bindParam(':persona',              $datosModelo["3"],    PDO::PARAM_STR);
        $consulta -> bindParam(':hora',                     $hora,                PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',                   $fecha,               PDO::PARAM_STR);
        $consulta -> bindParam(':activo',                  $activo,              PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }
                                                                    //Metodo que guarda los familiares y sus datos
    static public function guardarFamiliar($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (dni,
        direccion,
        telefono,
        num_cuenta,
        hora,
        fecha,
        activo,
        fk_persona,
        fk_tipo_familiar
        )
        VALUES(
        :dni,
        :direccion,
        :telefono,
        :numCuenta,
        :hora,
        :fecha,
        :activo,
        :persona,
        :tipo_familiar
        )");

        $consulta -> bindParam(':dni',              $datosModelo["0"],    PDO::PARAM_STR);
        $consulta -> bindParam(':direccion',    $datosModelo["1"],    PDO::PARAM_STR);
        $consulta -> bindParam(':telefono',      $datosModelo["2"],    PDO::PARAM_STR);
        $consulta -> bindParam(':numCuenta', $datosModelo["3"],    PDO::PARAM_STR);
        $consulta -> bindParam(':persona',       $datosModelo["4"],                PDO::PARAM_STR);
        $consulta -> bindParam(':tipo_familiar',$datosModelo["5"],               PDO::PARAM_STR);
        $consulta -> bindParam(':hora',            $hora,                PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',           $fecha,               PDO::PARAM_STR);
        $consulta -> bindParam(':activo',          $activo,              PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }     



                                                                    //Metodo que guardara los ingredientes que se incluiran en el menu

    static public function guardarIngrediente($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (nombre_ingrediente,
        hora,
        fecha,
        activo
        )
        VALUES(
        :ingredientes,
        :hora,
        :fecha,
        :activo
        )");

        $consulta -> bindParam(':ingredientes', $datosModelo["0"],         PDO::PARAM_STR);
        $consulta -> bindParam(':hora',          $hora,                    PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',         $fecha,                   PDO::PARAM_STR);
        $consulta -> bindParam(':activo',        $activo,                  PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }
                                            //metodo para registrar personas que bueden recoger al niño
    static public function guardarRecogida($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (fk_nino,
        fk_familiar,
        fech_recogida,
        hora_recogida,
        hora,
        fecha,
        activo
        )
        VALUES(
        :nino,
        :titular,
        :fech_recogida,
        :hora_recogida,
        :hora,
        :fecha,
        :activo
        )");

        $consulta -> bindParam(':nino',          $datosModelo["0"],         PDO::PARAM_STR);
        $consulta -> bindParam(':titular',       $datosModelo["1"],         PDO::PARAM_STR);
        $consulta -> bindParam(':fech_recogida', $datosModelo["2"],         PDO::PARAM_STR);
        $consulta -> bindParam(':hora_recogida', $datosModelo["3"],         PDO::PARAM_STR);
        $consulta -> bindParam(':hora',          $hora,                     PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',         $fecha,                    PDO::PARAM_STR);
        $consulta -> bindParam(':activo',        $activo,                   PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }
                                //hacer la relacion del niño con la alergia

    static public function guardarAlergiaNino($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (fk_ingrediente,
        fk_nino,
        hora,
        fecha,
        activo
        )
        VALUES(
        :ingrediente,
        :nino,
        :hora,
        :fecha,
        :activo
        )");

        $consulta -> bindParam(':ingrediente',   $datosModelo["0"],         PDO::PARAM_STR);
        $consulta -> bindParam(':nino',          $datosModelo["1"],         PDO::PARAM_STR);
        $consulta -> bindParam(':hora',          $hora,                    PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',         $fecha,                   PDO::PARAM_STR);
        $consulta -> bindParam(':activo',        $activo,                  PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }

                                        //guardar platillo
        static public function guardarPlato($datosModelo, $tabla)
    {
        date_default_timezone_set('America/Mazatlan');
        $fecha = date('Y,m-d');
        $hora = date('H:i:s');
        $activo = 1;

        $consulta =Conexion::Conectar()->prepare("INSERT INTO $tabla (
        nombre_plato,
        fk_ingrediente,
        hora,
        fecha,
        activo
        )
        VALUES(
        :nombre_plato,
        :ingrediente,
        :nino,
        :hora,
        :fecha,
        :activo
        )");

        $consulta -> bindParam(':nombre_plato',   $datosModelo["0"],         PDO::PARAM_STR);
        $consulta -> bindParam(':fk_ingrediente',          $datosModelo["1"],         PDO::PARAM_STR);
        $consulta -> bindParam(':hora',          $hora,                    PDO::PARAM_STR);
        $consulta -> bindParam(':fecha',         $fecha,                   PDO::PARAM_STR);
        $consulta -> bindParam(':activo',        $activo,                  PDO::PARAM_STR);

        if ($consulta -> execute()) {

            return 'ok';
        }
        else{

            return 'error';
        }

        $consulta -> close();


    }


/*################################################  muestras   ############################################################*/

    //método que muestra las personas activas y no activas
    static public function ObtenerPersona($tabla,$activo)
    {
        $peticion = Conexion::conectar()->prepare("SELECT pk_persona,
        hora,
        fecha,
        (nombre || ' '||primer_apellido ||' '||segundo_apellido) AS nombre_completo
        FROM $tabla WHERE activo = $activo");

        $peticion->execute();
        return $peticion;
        $peticion = null;
    }
    //METODO QUE MUESTRA EL TIPO DE FAMILIAR
    static public function ObtenerTipoFamiliar($tabla,$activo)
    {
        $peticion = Conexion::conectar() -> prepare("SELECT pk_tipo_familiar,
            tipo_familiar,
            hora,
            fecha
            FROM $tabla
            WHERE activo=$activo
            ");
        $peticion -> execute();
        return $peticion;
        $peticion = null;
    }

//MÉTODO QUE MUESTRA EL NIÑO
    static public function ObtenerNino($tabla,$activo)
    {
        $peticion = Conexion::conectar() -> prepare("SELECT
        pk_nino,
        num_matricula,
        (persona.nombre || ' '||persona.primer_apellido ||' '||persona.segundo_apellido) AS nombre_completo,
        fecha_nacimiento,
        fecha_ingreso,nino.activo,
        pk_nino FROM nino
         INNER JOIN persona ON nino.fk_persona= persona.pk_persona WHERE nino.activo=$activo");
        $peticion -> execute();
        return $peticion;
        $peticion = null;
    }

    //MÉTODO QUE MUESTRA EL FAMILIAR
    static public function ObtenerFamiliar($tabla,$activo)
    {
        $peticion = Conexion::conectar() -> prepare("SELECT pk_familiar,(nombre ||' '|| primer_apellido||' '||segundo_apellido) AS nombre_completo, tipo_familiar, dni, direccion, telefono, num_cuenta, familiar.activo FROM familiar INNER JOIN persona ON persona.pk_persona = familiar.fk_persona 
        INNER JOIN tipo_familiar ON tipo_familiar.pk_tipo_familiar = familiar.fk_tipo_familiar WHERE familiar.activo=$activo");
        $peticion -> execute();
        return $peticion;
        $peticion = null;
    }

    //MÉTODO QUE MUESTRA LOS INGREDIENTES
    static public function ObtenerIngrediente($tabla,$activo)
    {
        $peticion = Conexion::conectar() -> prepare("SELECT * FROM ingrediente WHERE activo=$activo");
        $peticion -> execute();
        return $peticion;
        $peticion = null;
    }
/*################################################  Enlaces   ############################################################*/
    
}