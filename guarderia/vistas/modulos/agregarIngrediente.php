<!-- Modal -->
<div class="modal fade" id="staticBackdropIngredientes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Registro</h1>
        <form method="POST">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label class="form-label">Ingresa ingrediente</label>
        <input type="text" name="ingredientes" class="form-control" placeholder="ingresa nombre(s)">
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
$registroIngrediente = new Controlador();
$registroIngrediente -> registroIngredienteControlador();