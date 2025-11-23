<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clash Royale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
      
.text-warning {
    text-shadow: 1px 1px 3px black, 
                 -1px -1px 3px black,
                 1px -1px 3px black,
                 -1px 1px 3px black;
    font-weight: bold;
}
</style>
</head>
<body>
  
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">CLASH ROYALE</a>
  </li>
</ul>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://royaleapi.com/cards/popular?time=7d&mode=grid&cat=Ranked&sort=rating" target="_blank">RANK CLASH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=jogadores">JOGADORES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=cartas">CARTAS</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php
include("conexao.php");
switch(@$_REQUEST["page"]){

  //menus internos
  case "jogadores":
    include("player_menu.php");
    break;
  case "cartas":
    include("carta_menu.php");
    break;

  //player
  case "player_novo":
    include("player_novo.php");
    break;
  case "player_listar":
    include("player_listar.php");
    break;
  case "player_editar":
    include("player_editar.php");
    break;
  case "player_salvar":
    include("player_salvar.php");
    break;

  //carta
  case "carta_nova":
    include("carta_nova.php");
    break;
  case "carta_listar":
    include("carta_listar.php");
    break;
  case "carta_editar":
    include("carta_editar.php");
    break;
  case "carta_salvar":
    include("carta_salvar.php");
    break;

  //home
  default:
  echo "<h1>BEM VINDO AO CLASH ROYALE</h1>";
  echo '<img src="img/clash-royale-background-a0xdalej6fii9ip3.png" class="img-fluid">';
        break;

}
?>
</body>
</html>