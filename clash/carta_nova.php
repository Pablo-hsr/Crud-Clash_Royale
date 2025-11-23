<div class="container mt-5">
  <div class="card shadow-lg border-warning">
    <div class="card-header bg-primary text-warning">
      <h3>Nova Carta</h3>
    </div>
    <div class="card-body bg-light">
      <form action="?page=carta_salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
          <label class="form-label">Nome da Carta</label>
          <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Raridade</label>
          <input type="text" name="raridade" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Elixir</label>
          <input type="number" name="elixir" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Tipo</label>
          <input type="text" name="tipo" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Alcance</label>
          <input type="text" name="alcance" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="?page=cartas" class="btn btn-dark">Voltar</a>
      </form>
    </div>
  </div>
</div>

