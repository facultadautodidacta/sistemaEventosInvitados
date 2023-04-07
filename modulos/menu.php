<nav class="navbar navbar-expand-lg navbar-light fondoNavbar  static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../public/img/logo.png" alt="..." height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active colorLetra" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active colorLetra" href="#">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active colorLetra" href="#">Listas de invitados</a>
        </li>
        <li class="nav-item dropdown">
          <a style="color:red" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['usuario']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../servidor/login/logout.php">Salir del sistema</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>