<?php
  include_once '../config.php' ;

  $ID = $_SESSION["Login"];

  $requisicao = "SELECT * FROM T_user WHERE idT_user = :ID";

  $Query = $connect->prepare($requisicao);

  $Query->execute(Array(
    ":ID" => $ID,
  ));

  $permissao = $Query->fetch();

?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <!-- Titulo do menu lateral-->
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="">
      <span class="ms-1 font-weight-bold text-white">Sistema</span>
    </a>
  </div>
  <!-- Fim Titulo do menu lateral-->
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Médio</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="./materia.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
          <span class="nav-link-text ms-1">Matérias</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="./tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
          <span class="nav-link-text ms-1">Arquivos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="./billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
          <span class="nav-link-text ms-1">Atividades</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="./notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
          <span class="nav-link-text ms-1">Notifications</span>
        </a>
      </li>
    </ul>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Técnico</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./dashboard.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">store</i>
              </div>
            <span class="nav-link-text ms-1">Matérias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./tables.html">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">store</i>
              </div>
            
            <span class="nav-link-text ms-1">Arquivos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./billing.html">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">store</i>
              </div>
            
            <span class="nav-link-text ms-1">Atividades</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./notifications.html">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
            
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <?php
          if($permissao["cargo"] == "ADM"){ ?>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Admin</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
            
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
            <?php } ?>



        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Social</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./explorar.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
            <span class="nav-link-text ms-1">Explorar</span>
          </a>
        </li>


      </ul>
    </div>
  </div>
</aside>