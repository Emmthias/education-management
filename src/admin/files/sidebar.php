<?php
/*getting active page name*/
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="sidebar" data-color="orange">
    <div class="logo" style="padding:unset;">
      <a href="dashboard.php" class="simple-text logo-mini" style="width:200px;padding-left:10px;">
          <img src="../assets/img/coedupro.png"/>
        </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="<?=($activePage=='dashboard' || $activePage=='new_test' || $activePage=='test_details' || $activePage=='add_question' || $activePage=='student_test_credentials')? 'active': ''; ?>">
          <a href="./dashboard.php">
            <i class="now-ui-icons shopping_shop"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="<?=($activePage=='add_data')? 'active': ''; ?>">
          <a href="./add_data.php">
            <i class="now-ui-icons business_badge"></i>
            <p>Agregar Materia / Estudiante</p>
          </a>
        </li>
        <li class="<?=($activePage=='statistics' || $activePage=='test_stats' || $activePage=='test_question_stats')? 'active': ''; ?>">
          <a href="./statistics.php">
            <i class="now-ui-icons business_chart-bar-32"></i>
            <p>Estadisticas</p>
          </a>
        </li>
        <li class="<?=($activePage=='view_data')? 'active': ''; ?>">
          <a href="./view_data.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Ver Datos</p>
          </a>
        </li>
        <li class="<?=($activePage=='logout')? 'active': ''; ?>">
          <a href="./logout.php">
            <i class="now-ui-icons media-1_button-power"></i>
            <p>Salir</p>
          </a>
        </li>
      </ul>
    </div>
  </div>