<nav class="navbar navbar-dark navbar-expand-lg p-2" style="background-color:#009EB3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GUARDERIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-cloud-arrow-up"></i>
            ALTA DE REGISTROS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar persona</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropRelacion">Agregar parentesco o relación</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropIngredientes">Agregar ingredientes</a></li>
            <li><a class="dropdown-item" href="index.php?accion=agregarNino">Registrar morrillo</a></li>
            <li><a class="dropdown-item" href="index.php?accion=agregarFamiliar">Registrar familiar</a></li>
            <li><a class="dropdown-item" href="index.php?accion=agregarRecogida">Registrar recogida</a></li>
            <li><a class="dropdown-item" href="index.php?accion=agregarAlergia">Registrar alergias</a></li>
            <li><a class="dropdown-item" href="index.php?accion=agregar_platillo">Registrar nuevo platillo</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-eye"></i>
            MOSTRAR REGISTROS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>