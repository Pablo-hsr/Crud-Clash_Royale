<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $raridade = $_POST["raridade"];
        $elixir = $_POST["elixir"];
        $tipo = $_POST["tipo"];
        $alcance = $_POST["alcance"];

        $sql = "INSERT INTO cartas (nome_carta, raridade_carta, elixir_carta, tipo_carta, alcance_carta) 
                VALUES ('{$nome}', '{$raridade}', '{$elixir}', '{$tipo}', '{$alcance}')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('carta registrada com sucesso');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        } else {
            print "<script>alert('Não foi possível registrar carta');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        }

        break;

    case 'editar':
       
        $nome = $_POST["nome"];
        $raridade = $_POST["raridade"];
        $elixir = $_POST["elixir"];
        $tipo = $_POST["tipo"];
        $alcance = $_POST["alcance"];
        
        $sql = "UPDATE cartas SET 
                nome_carta='{$nome}', 
                raridade_carta='{$raridade}', 
                elixir_carta='{$elixir}', 
                tipo_carta='{$tipo}', 
                alcance_carta='{$alcance}'
        WHERE 
            id_carta=".$_REQUEST["id"]; 
        
        $res = $conn->query($sql);

         if($res==true){
            print "<script>alert('Carta editada com Sucesso');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar a carta: " . $conn->error . "');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        }

        break;

   case 'excluir':
        
        $sql =  "DELETE FROM cartas WHERE id_carta=".$_REQUEST["id"]; 

        $res = $conn->query($sql);

         if($res==true){
            print "<script>alert('Carta excluida com sucesso');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir a carta');</script>";
            print "<script>location.href='?page=carta_listar';</script>";
        }

        break;
}
?>