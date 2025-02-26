<?php if (!empty($stories)): ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Data do Contato</th>
                <th>Estudante</th>
                <th>Cidade</th>
                <th>Área</th>
                <th>Nível de Ensino</th>
                <th>Unidade</th>
                <th>Classificação</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stories as $story): ?>
                <tr>
                    <td><a href="history.php?id=<?= $story['historia_id']; ?>"><?= $story['historia_id']; ?></a></td>
                    <td><?= $story['data_contato']; ?></td>
                    <td><?= $story['estudante']; ?></td>
                    <td><?= $story['cidade']; ?></td>
                    <td><?= $story['areas_interesse']; ?></td>
                    <td><?= $story['niveis_ensino']; ?></td>
                    <td><?= $story['unidade']; ?></td>
                    <td><?= $story['classificacao']; ?></td>
                    <td><?= $story['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $story['historia_id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                        <a href="delete.php?id=<?= $story['historia_id']; ?>" class="btn btn-sm btn-danger">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Nenhuma história encontrada.</p>
<?php endif; ?>
