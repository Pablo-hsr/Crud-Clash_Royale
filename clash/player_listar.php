<ul class="nav justify-content-center bg-primary p-3">
  <li class="nav-item">
    <a class="nav-link active fs-3 text-warning" aria-current="page" href="#">RANK JOGADORES</a>
  </li>
</ul>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<?php
    $sql = "SELECT * FROM player";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered border-primary'>";
        print "<thead class='table-dark'>";
        print "<tr>";
            print "<th>#ID</th>";
            print "<th>Nome</th>";
            print "<th>Nível</th>";
            print "<th>Troféus</th>";
            print "<th>O que deseja fazer?</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";;
        
        while($row = $res->fetch_object()){
           print "<tr>";
            print "<td>" . $row->id_player . "</td>";
            print "<td class='fw-bold'>" . $row->nome_player . "</td>";
            print "<td>" . $row->nivel_player . "</td>";
            print "<td class='text-warning fw-bold'>" . $row->trofeus_player . " 🏆</td>";
            print "<td>";
                print "<button onclick=\"location.href='?page=player_editar&id=".$row->id_player."';\" class='btn btn-success btn-sm'>Editar</button> ";
                print "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=player_salvar&acao=excluir&id=".$row->id_player."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</tbody>";

    }else{
        print"<p class='alert alert-danger'>Nenhum jogador encontrado!</p>";
    }

    




?>