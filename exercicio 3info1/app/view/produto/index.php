<table class="table table-bordered table-responsive-xl">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td scope="row"><?= $produto->getId() ?></td>
            <td><?=$produto->getNome() ?></td>
            <td><?=$produto->getDescricao() ?></td>
            <td>R$ <?=$produto->getPreco() ?></td>
            <td><a href="editar-produto.php?action=editar&codigo=<?=$produto->getId();?>&nome=<?=$produto->getNome();?>&descricao=<?=$produto->getDescricao();?>">Editar</a> | <a href="controleAcao.php?action=excluir&codigo=<?=$produto->getId();?>">Excluir</a></td>
        </tr>
    <?php endforeach ?>

    </tbody>
</table>
<br>
<br>
<br>
