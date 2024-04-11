<!DOCTYPE html>
<html lang="pt_br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac na Minha História</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column">
    <?php include('header.php')?>

    <main class="flex-shrink-0 h-100">
        <?php include ('breadcrumb.php')?>

        <section class="container sampleTable">
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
                    <tr>
                        <td>1</td>
                        <td>20/02/2024</td>
                        <td>Rodrigo Vieira</td>
                        <td>Campinas</td>
                        <td>Tecnologia da Informação</td>
                        <td>Graduação</td>
                        <td>CAS</td>
                        <td>Pagante</td>
                        <td>Publicado no Blog</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>2</td>
                        <td>04/04/2024</td>
                        <td>Tatiana Monteiro</td>
                        <td>São Paulo</td>
                        <td>Saúde</td>
                        <td>Pós Graduação</td>
                        <td>TIT</td>
                        <td>Bolsista</td>
                        <td>Apurado</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>09/03/2024</td>
                        <td>Francisco Eufrasio</td>
                        <td>São Paulo</td>
                        <td>Turismo e Hospitalidade</td>
                        <td>Técnico</td>
                        <td>TBS</td>
                        <td>Pagante</td>
                        <td>Apurado</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>28/08/2023</td>
                        <td>Renato Antonio </td>
                        <td>Osasco</td>
                        <td>Moda</td>
                        <td>Extensão Universitária</td>
                        <td>OSA</td>
                        <td>Bolsista</td>
                        <td>Publicado no Blog</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>20/02/2024</td>
                        <td>Rodrigo Vieira</td>
                        <td>Campinas</td>
                        <td>Tecnologia da Informação</td>
                        <td>Graduação</td>
                        <td>CAS</td>
                        <td>Pagante</td>
                        <td>Publicado no Blog</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>2</td>
                        <td>04/04/2024</td>
                        <td>Tatiana Monteiro</td>
                        <td>São Paulo</td>
                        <td>Saúde</td>
                        <td>Pós Graduação</td>
                        <td>TIT</td>
                        <td>Bolsista</td>
                        <td>Apurado</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>09/03/2024</td>
                        <td>Francisco Eufrasio</td>
                        <td>São Paulo</td>
                        <td>Turismo e Hospitalidade</td>
                        <td>Técnico</td>
                        <td>TBS</td>
                        <td>Pagante</td>
                        <td>Apurado</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>28/08/2023</td>
                        <td>Renato Antonio </td>
                        <td>Osasco</td>
                        <td>Moda</td>
                        <td>Extensão Universitária</td>
                        <td>OSA</td>
                        <td>Bolsista</td>
                        <td>Publicado no Blog</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

        <?php 
        //include('spinners.php');
        //include('alerts.php')
        ?>
    </main>

    <?php include('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>