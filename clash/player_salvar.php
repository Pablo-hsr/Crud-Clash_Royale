<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $nivel = $_POST["nivel"];
        $trofeus = $_POST["trofeus"];

        $sql = "INSERT INTO player (nome_player, nivel_player, trofeus_player) 
                VALUES ('{$nome}', '{$nivel}', '{$trofeus}')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Jogador cadastrado com Sucesso');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar jogador');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        }

        break;

    case 'editar':
       
        $nome = $_POST["nome"];
        $nivel = $_POST["nivel"];
        $trofeus = $_POST["trofeus"];
        
        $sql = "UPDATE player SET nome_player='{$nome}',nivel_player='{$nivel}', trofeus_player='{$trofeus}'
        WHERE 
            id_player=".$_REQUEST["id"];   

        $res = $conn->query($sql);

         if($res==true){
            print "<script>alert('Jogador editado com Sucesso');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar o jogador');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        }

        break;

    case 'excluir':

        $sql =  "DELETE FROM player WHERE id_player=".$_REQUEST["id"];

        $res = $conn->query($sql);

         if($res==true){
            print "<script>alert('jogador excluido com sucesso');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir o jogador');</script>";
            print "<script>location.href='?page=player_listar';</script>";
        }

        break;
}
?>