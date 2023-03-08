<div class="m-3">
    <div class="form shadow-lg rounded p-5">
        <form class=" rounded" method="POST">
            <div>
                <h4>Formulario de registro para el registro del tutor del niño</h4>            
            </div>
            <label for="" class="col-form-label-lg">Selecciona el nombre</label>
            <?php 
                $listaPersona = new Controlador();
                $listaPersona -> listaPersonas();
            ?>
            <label for="" class="col-form-label-lg">¿Que tipo de relacion tiene con el niño?</label>
            <?php 
                $listaFamiliar = new Controlador();
                $listaFamiliar -> listaTipoFamiliar();
            ?>

            <label class="col-form-label-lg">DNI</label>
            <input type="text" name="dni" class="form-control">
            <label class="col-form-label-lg">Dirección</label>
            <input type="text" name="direccion" class="form-control">
            <label class="col-form-label-lg">Telefono</label>
            <input type="text" name="telefono" class="form-control">
            <label class="col-form-label-lg">Numero de cuenta</label>
            <input type="text" name="numCuenta" class="form-control">
            <br>
            <button type="submit" name="botonFamiliar" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
<?php 
    $registroFam = new Controlador();
    $registroFam -> registroFamiliarControlador();
 ?>
<style>
    .form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0 auto;
  max-width: 600px;
}





</style>