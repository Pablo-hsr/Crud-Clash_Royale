<ul class="nav justify-content-center bg-primary p-3">
  <li class="nav-item">
    <a class="nav-link active fs-3 text-warning" aria-current="page" href="#">Lista Das Cartas</a>
  </li>
</ul>
<div class="container mt-4">
<?php
    
    $sql = "SELECT * FROM cartas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

if($qtd > 0){
        print "<div class='table-responsive'>";
        print "<table class='table table-hover table-striped table-bordered border-primary'>";
        print "<thead class='table-dark'>";
        print "<tr>";
            print "<th>ID</th>"; 
            print "<th>Nome</th>";
            print "<th>Raridade</th>";
            print "<th>Elixir 🧪</th>"; 
            print "<th>Tipo</th>"; 
            print "<th>Alcance</th>"; 
            print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        
        while($row = $res->fetch_object()){
           print "<tr>";
            print "<td>" . $row->id_carta . "</td>";
            print "<td class='fw-bold'>" . $row->nome_carta . "</td>";
            print "<td>" . $row->raridade_carta. "</td>";
            print "<td class='text-warning fw-bold'>" . $row->elixir_carta . "</td>";
            print "<td>" . $row->tipo_carta . "</td>";
            print "<td>" . $row->alcance_carta . "</td>";

            print "<td>";
                print "<button onclick=\"location.href='?page=carta_editar&id=".$row->id_carta."';\" class='btn btn-success btn-sm'>Editar</button> ";
                print "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=carta_salvar&acao=excluir&id=".$row->id_carta."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
        print "</div>";

    }else{
        print"<p class='alert alert-danger'>Nenhuma carta encontrada!</p>";
    }
?>
</div>