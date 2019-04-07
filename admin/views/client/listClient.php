<h2 class="center">Clientes</h2>
<a href="?c=c&a=c" class="waves-effect waves-light btn-small">Create</a>
<table>
    <thead>
        <tr>
            <th>Produto</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item["name"] ?></td>
                <td><?= $item["endereco"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["telefone"] ?></td>
                <td> 
                    <a href="?c=c&a=u&id=<?= $item["idCliente"]?>" class="waves-effect waves-light amber darken-4 btn">ATUALIZAR</a>
                    <a href="?c=c&a=d&id=<?= $item["idCliente"]?>" class="waves-effect waves-light red darken-1 btn">DELETAR</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
