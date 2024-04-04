<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac na Minha História</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            </div>
        </div>
    </nav>
    </header>

    <main>
        <section class="container breadcrumbs">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </section>

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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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
                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
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

        <section class="container spinners">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </section>

        <section class="container alerts">        
            <div class="alert alert-success" role="alert">
                <span>História excluída com sucesso</span>
            </div>
            
            <div class="alert alert-danger" role="alert">
                <span>O sistema apresentou o seguinte erro:</span>
            </div>
        </section>
    </main>

    <footer>
        <section class="modals">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>