<div class="m-3">
    <div class="form shadow-lg rounded p-5">
        <form class=" rounded" method="POST">
            <div>
                <h4>Formulario de para registrar la alergia de los niños</h4>            
            </div>
            <label for="" class="col-form-label-lg">Selecciona al niño</label>
            <?php 
                $listaNino = new Controlador();
                $listaNino -> listaNino();
            ?>
            <label for="" class="col-form-label-lg">Selecciona el ingrediente</label>
            <?php 
                $listaNino = new Controlador();
                $listaNino -> listaIngrediente();
            ?>
            <br>
            <button type="submit" name="alergiaNino" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
<?php 
    $registroNino = new Controlador();
    $registroNino -> registroAlergiaNinoControlador();
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