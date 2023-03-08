<?php
class Controlador
    {
        static public function paginas()
        {
            include("vistas/plantilla.php");
        }
                                                                                                              //Controlador que administra los enlaces
        static public function enlacesPaginas()
        {
            if (isset($_GET['accion'])) {
                $enlaces = $_GET['accion'];
            }
            else
            {
                $enlaces = "principal";
            }
            $respuesta = Paginas::enlacesPaginasModelo($enlaces);

            include $respuesta;
        }

        /*######################################  METODOS QUE HACEN REGISTRSO  #########################################*/

                                                                                                                //Controlador para  agregar registro de personas
        static public  function registroPersonaControlador()
        {
            if (isset($_POST['nombre_persona'])) {

                $datosControlador = array(
                    "0"=>$_POST['nombre_persona'],
                    "1"=>$_POST['apellido1'],
                    "2"=>$_POST['apellido2']
                );

                $tabla = 'persona';

                $respuesta = Datos::guardarPersona($datosControlador,$tabla);
                
                if ($respuesta == 'ok') {
                    echo('Todo bien todo correcto');
                }
                else
                {
                    echo('error');
                }
            }
        }

                                                                                                                //controlador para registrar el tipo de familiar
        static public  function registroTipoFamiliarControlador()
        {
            if (isset($_POST['tipo_familiar'])) {

                $datosControlador = array(
                    "0" => $_POST['tipo_familiar']
                );

                $tabla = 'tipo_familiar';
                $respuesta = Datos::guardarTipoFamiliar($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo('Todo bien todo correcto');
                }
                else
                {
                    echo('error');
                }
            }

        }

                                                                                 //Metodo que registra al (morro controlador)                                  

        static public  function registroNinoControlador()
        {
            if (isset($_POST['botonNino'])) {

                $datosControlador = array(
                    "0" => $_POST['numeroMatricula'],
                    "1" => $_POST['fechaNacimiento'],
                    "2" => $_POST['fechaIngreso'],
                    "3" => $_POST['persona']
                );

                $tabla = 'nino';
                $respuesta = Datos::guardarNino($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo('Todo bien todo correcto');
                }
                else
                {
                    echo('error');
                }
            }

        }

                                                    //metodo que registra a los familiares
        static public  function registroFamiliarControlador()
        {
            if (isset($_POST['botonFamiliar'])) {

                $datosControlador = array(
                    "0" => $_POST['dni'],
                    "1" => $_POST['direccion'],
                    "2" => $_POST['telefono'],
                    "3" => $_POST['numCuenta'],
                    "4" => $_POST['persona'],
                    "5" => $_POST['tipo_familiar']
                );

                $tabla = 'familiar';
                $respuesta = Datos::guardarFamiliar($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo('Todo bien todo correcto');
                }
                else
                {
                    echo('error');
                }
            }

        }


                                                    //metodo que registra quien puede recoger al niño 
        static public  function registroRecogerControlador()
        {
            if (isset($_POST['botonRecogida'])) {

                $datosControlador = array(
                    "0" => $_POST['nino'],
                    "1" => $_POST['titular'],
                    "2" => $_POST['fech_recogida'],
                    "3" => $_POST['hora_recogida']
                );

                $tabla = 'recoger';
                $respuesta = Datos::guardarRecogida($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo('Todo bien todo correcto');
                }
                else
                {
                    echo('error');
                }
            }

        }

                                                                                                            // controlador para registrar ingredientes
        static public function registroIngredienteControlador()
        {
            if (isset($_POST['ingredientes'])) {
                $datosControlador = array(
                    "0"=>$_POST['ingredientes']
                );

                $tabla = 'ingrediente';

                $respuesta = Datos::guardarIngrediente($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo 'Ya se guardo wey';
                }
                else{
                    echo 'Ya valio verga';
                }
            }
        }

         static public function registroAlergiaNinoControlador()
        {
            if (isset($_POST['alergiaNino'])) {
                $datosControlador = array(
                    "0"=>$_POST['ingrediente'],
                    "1"=>$_POST['nino']
                );

                $tabla = 'alergia';

                $respuesta = Datos::guardarAlergiaNino($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo 'Ya se guardo wey';
                }
                else{
                    echo 'Ya valio verga';
                }
            }
        }



        //agregar ingredientes y el platilllo
        static public function guardarPlatoControlador ()
        {
            if (isset($_POST['botonPlato'])) {
                $datosControlador = array(
                    "0"=>$_POST['nombre_platillo'],
                    "1"=>$_POST['ingredientes']
                );

                $tabla = 'plato';

                $respuesta = Datos::guardarPlato($datosControlador,$tabla);

                if ($respuesta == 'ok') {
                    echo 'Ya se guardo wey';
                }
                else{
                    echo 'Ya valio verga';
                }
            }
        }




        /*############################################ Metodos para selects ##############################################*/

        static public function listaPersonas()
        {
            $tabla = 'persona';
            $activo = 1;
            $respuesta = Datos::ObtenerPersona($tabla,$activo);
            ?>
            <select name="persona" id="" class="form-control">
                <option value="">Selecciona el nombre</option>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <option value="<?php echo $registro['pk_persona']; ?>"><?php echo $registro['nombre_completo']; ?></option>
                    <?php
                }
                ?>


            </select>


            <?php
        }

                                                                            //metodo para el select de los tipos de familiar
        static public function listaTipoFamiliar()
        {
            $tabla = 'tipo_familiar';
            $activo = 1;
            $respuesta = Datos::ObtenerTipoFamiliar($tabla,$activo);
            ?>
            <select name="tipo_familiar" id="" class="form-control">
                <option value="">Selecciona el parentesco</option>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <option value="<?php echo $registro['pk_tipo_familiar']; ?>"><?php echo $registro['tipo_familiar']; ?></option>
                    <?php
                }
                ?>


            </select>


            <?php
        }

                                                                //METODO PARA OBTENER EL SELECT DE NIÑO
        static public function listaNino()
        {
            $tabla = 'nino';
            $activo = 1;
            $respuesta = Datos::ObtenerNino($tabla,$activo);
            ?>
            <select name="nino" id="" class="form-control">
                <option value="">Selecciona a el niño</option>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <option value="<?php echo $registro['pk_nino']; ?>"><?php echo $registro['nombre_completo']; ?></option>
                    <?php
                }
                ?>


            </select>


            <?php
        }

        static public function listaFamiliar()
        {
            $tabla = 'familiar';
            $activo = 1;
            $respuesta = Datos::ObtenerFamiliar($tabla,$activo);
            ?>
            <select name="titular" id="" class="form-control">
                <option value="">Selecciona a el niño</option>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <option value="<?php echo $registro['pk_familiar']; ?>"><?php echo $registro['nombre_completo']; ?></option>
                    <?php
                }
                ?>


            </select>


            <?php
        }

                                                                    //aqui esta la lista de los ingrediente
        static public function listaIngrediente()
        {
            $tabla = 'ingrediente';
            $activo = 1;
            $respuesta = Datos::ObtenerIngrediente($tabla,$activo);
            ?>
            <select name="ingrediente" id="" class="form-control">
                <option value="">Selecciona el ingrediente al que el niño es alergico</option>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <option value="<?php echo $registro['pk_ingrediente']; ?>"><?php echo $registro['nombre_ingrediente']; ?></option>
                    <?php
                }
                ?>


            </select>


            <?php
        }

                                                                //Lista de ingredientes
        static public function listadoIngrediente()
        {
            $tabla = 'ingrediente';
            $activo = 1;
            $respuesta = Datos::ObtenerIngrediente($tabla,$activo);
            ?>
                <?php
                foreach($respuesta as $registro)
                {
                    ?>
                    <div class="form-check">
                       <br><label class="form-label"> <?php echo $registro['nombre_ingrediente']; ?><input class="form-check-input" type="checkbox" name="ingredientes" value="<?php echo $registro['pk_ingrediente'];?>" id="flexCheckDefault"> </label><br>
                    </div>
                    <?php
                }
                ?>




            <?php
        }

    }

?>