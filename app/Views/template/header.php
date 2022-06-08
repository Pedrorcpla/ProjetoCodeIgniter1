<link href="css/style.css"  rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="header">
    <a href="home" class="logo">Tavares</a>
    <ul>
        <li><a href="quemsomos" class="navSobre">Nós</a></li>
        <li><a href="login" class="navLogin">Login</a></li>
        
        <?php 
            $session = \Config\Services::session();
            if($session->get('logado')){
        ?>
        
        <li><a href="cadastro-pessoas" class="navCadastro">Cadastro</a></li>
        <li><a href="pessoa" class="navLista">Listar</a></li>
        <li><a href="sair" class="navSair">Sair</a></li>
        
        <?php } ?>
    </ul>
</div>