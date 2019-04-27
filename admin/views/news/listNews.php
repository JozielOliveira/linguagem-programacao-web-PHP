<h2 class="center">Noticias</h2>
<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Noticia</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item["title"] ?></td>
                <td><?= $item["news"] ?></td>
                <td> 
                    <a href="?c=n&a=u&id=<?= $item["idNew"]?>" class="waves-effect waves-light blue darken-1 btn">ATUALIZAR</a>
                    <a href="?c=n&a=d&id=<?= $item["idNew"]?>" class="waves-effect waves-light red darken-1 btn">DELETAR</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="?c=n&a=c">
        <i class="large material-icons waves-effect waves-light green darken-1">add</i>
    </a>
</div>
