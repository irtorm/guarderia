<div class="m-3">
    <div class="form shadow-lg rounded p-5">
        <form class=" rounded" method="POST">
            <div>
                <h4>Formulario de registro para un niño</h4>            
            </div>
            <label for="" class="col-form-label-lg">Selecciona el nombre</label>
            <?php 
                $listaPersona = new Controlador();
                $listaPersona -> listaPersonas();
            ?>
            <label class="col-form-label-lg">Numero de matricula</label>
            <input type="text" name="numeroMatricula" class="form-control">
            <label class="col-form-label-lg">Fecha de nacimiento</label>
            <input type="date" name="fechaNacimiento" class="form-control">
            <label class="col-form-label-lg">Fecha de ingreso</label>
            <input type="date" name="fechaIngreso" class="form-control">
            <br>
            <button type="submit" name="botonNino" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
<?php 
    $registroNino = new Controlador();
    $registroNino -> registroNinoControlador();
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