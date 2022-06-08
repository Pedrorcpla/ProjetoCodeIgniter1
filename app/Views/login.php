<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
  <h2>Login</h2>
  <form class="col-8" method="post" action="logar">
    <div class="mb-3">
      <label for="InputNome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="InputNome" name="nome">
    </div>
    <div class="mb-3">
      <label for="InputSenha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="InputSenha" name="senha">
    </div>
    <button type="submit" class="btn btn-primary col-12">Enviar</button>
  </form>
</div>