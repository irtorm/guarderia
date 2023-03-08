<div class="m-3">
    <div class="form shadow-lg rounded p-5">
        <form class=" rounded" method="POST">
            <div>
                <h4>Formulario de para registrar un platillo</h4>            
            </div>

            <label class="col-form-label-lg">Ingresa eln nombre del platillo</label>
            <input type="" name="nombre_platillo" class="form-control">
            <label class="col-form-label-lg">Selecciona los ingredientes</label>
            <?php 
                $ingredientes = new Controlador();
                $ingredientes -> listadoIngrediente();

             ?>
            <br>
            <button type="submit" name="nombre_platillo" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
<?php 
    $registroNino = new Controlador();
    $registroNino -> guardarPlatoControlador();
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