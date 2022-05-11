<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div id="menu">
    <div class="col-10 offset-1">
    <h1> <?=$title?> </h1>
    <br>
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td>Profissão:</td>
                <td>Idade:</td>
            </tr>
    
    <?php
        foreach($pessoas as $pessoas_item){
    ?>
            <tr>
                <td><?= $pessoas_item['nome'] ?></td>
                <td><?= $pessoas_item['profissao'] ?></td>
                <td><?= $pessoas_item['idade'] ?></td>
                <td><a href="excluir/<?= $pessoas_item['id']?>" class="btn btn-danger">Apagar</a></td>
                <td><a href="" class="btn btn-warning">Editar</a></td>
            </tr>
    <?php
        }
    ?>
        </table>
    </div>
</div>