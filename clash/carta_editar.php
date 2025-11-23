    <?php

       
        $sql = "SELECT * FROM cartas WHERE id_carta=".$_REQUEST["id"];

        $res = $conn->query($sql);

        $row = $res->fetch_object();

    ?>
    <div class="container mt-5">
    <div class="card shadow-lg border-warning">
        <div class="card-header bg-primary text-warning">
        <h3>Editar Carta</h3> 
        </div>
        <div class="card-body bg-light">
        <form action="?page=carta_salvar" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php echo $row->id_carta; ?>">

            <div class="mb-3">
            <label class="form-label">Nome da Carta</label>
            <input type="text" name="nome" value="<?php print $row->nome_carta; ?>" class="form-control">
            </div>

            <div class="mb-3">
            <label class="form-label">Raridade</label>
            <input type="text" name="raridade" value="<?php print $row->raridade_carta; ?>" class="form-control">
            </div>

            <div class="mb-3">
            <label class="form-label">Elixir</label>
            <input type="number" name="elixir" value="<?php print $row->elixir_carta; ?>" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Tipo</label>
              <input type="text" name="tipo" value="<?php print $row->tipo_carta; ?>" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Alcance</label>
              <input type="text" name="alcance" value="<?php print $row->alcance_carta; ?>" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="?page=cartas" class="btn btn-dark">Voltar</a>
        </form>
        </div>
    </div>
    <img src="img/joia.jpg" alt="">
    </div>