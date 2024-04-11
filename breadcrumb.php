<section class="container breadcrumbs my-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <?php
                $_GET['page'] = 'cadastrar';
                if ($_GET['page'] == 'Cadastrar'):?>
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
                <?php elseif ($_GET['page'] == 'home'): ?>
                     
                <?php endif;?>
        </ol>
    </nav>
</section>

<!-- Termo de Uso de Imagem -->

