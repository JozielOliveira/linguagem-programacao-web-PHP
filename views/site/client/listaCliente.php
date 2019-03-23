<h2 class="center">Clientes</h2>
<table>
    <thead>
        <tr>
            <th>Produto</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item["name"] ?></td>
                <td><?= $item["endereco"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["telefone"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
