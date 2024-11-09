<?php
require_once __DIR__ . "/../../config/config.php";

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conciliador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/./public/assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- sidebar -->
<div
  class="sidebar w3-sidebar w3-bar-block w3-collapse w3-card pt-5 border border-black border-opacity-25 border-1  border-bottom border-body text-center rounded-1"
  style="width:60px; margin-left:3px;" id="mySidebar">
  <img src="/./public/assets/img/logo-pj.ico" class="navbar-brand" alt="Logo" width="55px">
  <a href="#" class="w3-bar-item btn btn-outline-primary" title="Conciliador"><i class="bi bi-list-ul"></i></a>
  <a href="#" class="w3-bar-item btn btn-outline-primary" title="Dashboard"><i class="bi bi-graph-down"></i></a>
  <a href="#" class="w3-bar-item btn btn-outline-primary" title="Configurações"><i class="bi bi-gear"></i></a>
  <a href="#" class="w3-bar-item btn btn-outline-primary" title="Gerenciar"><i class="bi bi-database-fill"></i></a>
  <a href="#" class="w3-bar-item btn btn-outline-primary" title="Sair"><i class="bi bi-box-arrow-right"></i></a>
</div>

<!-- navbar -->
<nav class="navbar container-fluid ps-3 border-bottom border-body">
  <div class="">
    <a class="navbar-brand text-primary ms-5">Conciliador</a>
  </div>
</nav>

<body>