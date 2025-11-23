    <?php

        $sql = "SELECT * FROM player WHERE id_player=".$_REQUEST["id"];

        $res = $conn->query($sql);

        $row = $res->fetch_object();

    ?>
    <div class="container mt-5">
    <div class="card shadow-lg border-warning">
        <div class="card-header bg-primary text-warning">
        <h3>Editar Jogador</h3>
        </div>
        <div class="card-body bg-light">
        <form action="?page=player_salvar" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php echo $row->id_player; ?>">

            <div class="mb-3">
            <label class="form-label">Nome do Jogador</label>
            <input type="text" name="nome" value="<?php print $row->nome_player; ?>" class="form-control">
            </div>

            <div class="mb-3">
            <label class="form-label">Nivel</label>
            <input type="number" name="nivel" value="<?php print $row->nivel_player; ?>" class="form-control">
            </div>

            <div class="mb-3">
            <label class="form-label">Trofeu</label>
            <input type="number" name="trofeus" value="<?php print $row->trofeus_player; ?>" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="?page=jogadores" class="btn btn-dark">Voltar</a>
        </form>
        </div>
    </div>
    <img src="img/dei24mq-2e06525d-7f0b-4e6a-ad54-1a2cedf2eff2.png"width="350" height="350" alt="">
    </div>
