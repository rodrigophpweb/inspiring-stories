<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <!-- Botão Anterior -->
        <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?= $page - 1; ?>">Anterior</a>
        </li>

        <!-- Números de Página -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= ($i == $page) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
            </li>
        <?php endfor; ?>

        <!-- Botão Próximo -->
        <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?= $page + 1; ?>">Próximo</a>
        </li>
    </ul>
</nav>
