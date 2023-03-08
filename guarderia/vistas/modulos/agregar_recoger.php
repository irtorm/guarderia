<div class="m-3">
    <div class="form shadow-lg rounded p-5">
        <form class=" rounded" method="POST">
            <div>
                <h4>Tutores</h4>            
            </div>
            <label for="" class="col-form-label-lg">Selecciona el nombre del niño</label>
            <?php 
                $listaPersona = new Controlador();
                $listaPersona -> listaNino();
            ?>
            <label for="" class="col-form-label-lg">Selecciona el nombre del tutor</label>
            <?php 
                $listaFamiliar = new Controlador();
                $listaFamiliar -> listaFamiliar();
            ?>
            <label class="col-form-label-lg">Fecha de recogida</label>
            <input type="date" name="fech_recogida" class="form-control">
            <label class="col-form-label-lg">Hora de recogida</label>
            <input type="time" name="hora_recogida" class="form-control">
            <br>
            <button type="submit" name="botonRecogida" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
<?php 
    $registroNino = new Controlador();
    $registroNino -> registroRecogerControlador();
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