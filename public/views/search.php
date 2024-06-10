<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac na Minha História</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.min.css">

    <style>
        .infotable {
            display: none;
        }
    </style>

</head>
<body>
    <?php include('header.php')?>

    <main>
        <?php include('breadcrumb.php');?>

        <section class="search">
            <header class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Filtros</h2>
                    </div>
                    <div class="genre col-3 mt-5">
                        <label for="gender" class="form-label"><strong>Gênero</strong></label>
                        <select class="form-select" aria-label="gender">
                            <option selected>Selecione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Outros</option>
                        </select>
                    </div>
                    
                    <div class="age col-3 mt-5">
                        <label for="age" class="form-label"><strong>Idade</strong></label>
                        <select class="form-select" aria-label="age">
                            <option selected>Selecione</option>
                            <option value="1">14 à 19</option>
                            <option value="2">20 à 25</option>
                            <option value="3">26 à 30</option>
                            <option value="4">31 à 35</option>
                            <option value="4">36 à 40</option>
                            <option value="4">41 à 45</option>
                            <option value="4">45 à 50</option>
                        </select>
                    </div>

                    <div class="school col-3 mt-5">
                        <label for="school" class="form-label"><strong>Unidade</strong></label>
                        <select class="form-select" aria-label="school">
                            <option selected>Unidades</option>
                            <option value="1"></option>
                        </select>
                    </div>

                    <div class="payment col-3 mt-5">
                        <label for="payment" class="form-label"><strong>Pagante | Bolsista</strong></label>
                        <select class="form-select" aria-label="payment">
                            <option selected>Selecione</option>
                            <option value="pagante">Pagante</option>
                            <option value="bolsista">Bolsista</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="interesse col-3 mt-5">
                        <label for="interesse" class="form-label"><strong>Área de interesse</strong></label>
                        <select class="form-select" aria-label="interesse">
                            <option selected>Selecione</option>                            
                        </select>
                    </div>

                    <div class="levelCourse col-3 mt-5">
                        <label for="levelCourse" class="form-label"><strong>Nível de Ensino do Curso</strong></label>
                        <select class="form-select" aria-label="levelCourse">
                            <option selected>Selecione</option>                            
                        </select>
                    </div>

                    <div class="typeHistory col-3 mt-5">
                        <label for="typeHistory" class="form-label"><strong>Tipo da História</strong></label>
                        <select class="form-select" aria-label="typeHistory">
                            <option selected>Selecione</option>   
                            <option value="fizSenac">Fiz Senac!</option>
                            <option value="carrerTransition">Transição de Carreira</option>
                            <option value="collective">Coletividade</option>
                            <option value="empreenda">Empreenda</option>
                            <option value="timeAccomplish">Tempo de Realizar</label>
                        </select>
                    </div>

                    <div class="statusHistory col-3 mt-5">
                        <label for="statusHistory" class="form-label"><strong>Status História</strong></label>
                        <select class="form-select" aria-label="statusHistory">
                            <option selected>Selecione</option>
                            <option value="Apurado">Apurado</option>
                            <option value="Publicado">Publicado</option>
                        </select>
                    </div>
                </div>
            </header>
        </section>

        <section class="infotable">
            <div class="container">
                <div class="row my-5">
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
                            <td><a href="history.php?id=1">1</a></td>
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
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </section>
        
        <!--
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
        </section>-->
    </main>

    <?php include('footer.php');?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.form-select').change(function() {
                if ($(this).val() !== '') {
                    $('.infotable').fadeIn();
                }
            });
        });


    </script>
</body>
</html>