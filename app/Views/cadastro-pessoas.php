<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form class="col-8 offset-2" method="post" action="gravar">
  <div class="mb-3">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="InputNome" name="nome">
  </div>
  <div class="mb-3">
    <label for="InputProfissao" class="form-label">Profissão</label>
    <input type="text" class="form-control" id="InputProfissao" name="profissao">
  </div>
  <div class="mb-3">
    <label for="InputIdade" class="form-label">Idade</label>
    <input type="number" class="form-control" id="InputIdade" name="idade">
  </div>
  <button type="submit" class="btn btn-primary col-12">Enviar</button>
</form>