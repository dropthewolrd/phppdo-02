<?php
require_once 'global.php';
require_once 'cabecalho.php';

    try {
        $lista = Produto::listar();
//        echo "<pre>";
//        print_r($lista);
//        echo "</pre>";
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
?>
<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Crair Novo Produto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if (count($lista) > 0): ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $linha):
                        extract($linha);
                        ?>
                    <tr>
                        <td><?=$id?></td>
                        <td><?=$nome?></td>
                        <td>R$ <?=$preco?></td>
                        <td><?=$quantidade?></td>
                        <td><?=$categoria_nome?></td>
                        <td><a href="/produtos-editar.php?id=<?=$id?>" class="btn btn-info">Editar</a></td>
                        <td><a href="/produtos-excluir-post.php?id=<?=$id?>" class="btn btn-danger excluir">Excluir</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum produto cadastrado</p>
        <?php endif ?>
    </div>
</div>
<?php require_once 'rodape.php' ?>
