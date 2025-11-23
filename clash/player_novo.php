<div class="container mt-5">
  <div class="card shadow-lg border-warning">
    <div class="card-header bg-primary text-warning">
      <h3>Novo Jogador</h3>
    </div>
    <div class="card-body bg-light">
      <form action="?page=player_salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
          <label class="form-label">Nome do Jogador</label>
          <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Nivel</label>
          <input type="number" name="nivel" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Trofeu</label>
          <input type="number" name="trofeus" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="?page=jogadores" class="btn btn-dark">Voltar</a>
      </form>
    </div>
  </div>
  <img src="img/rei.png" alt="">
</div>
