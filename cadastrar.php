<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac na Minha História</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                <a class="nav-link" href="#">Link</a>
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

        <section class="container formCad">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dateContact" class="form-label">Data do Contato</label>
                        <input type="text" class="form-control" id="dateContact" placeholder="00/00/000">
                    </div>
                </div>    
                
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dateUpdate" class="form-label">Data de Atualização da História</label>
                        <input type="text" class="form-control" id="dateUpdate" placeholder="00/00/0000">
                    </div>
                </div>                

                <div class="mb-3">
                    <label for="nameStudent" class="form-label">Nome Completo do Estudante</label>
                    <input type="text" class="form-control" id="nameStudent" placeholder="Ayrton Senna da Silva">
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Data de nascimento</label>
                        <input type="text" class="form-control" id="birthday" placeholder="00/00/000">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gênero</label>
                        <select class="form-select" aria-label="gender">
                            <option selected>Selecione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Outros</option>
                        </select>                    
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="paganteBolsista" class="form-label">Pagante | Bolsista</label><br>
                    <div class="form-check-lg form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="pagante" value="pagante">
                        <label class="form-check-label" for="pagante">Pagante</label>
                    </div>
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="bolsista" value="bolsista">
                        <label class="form-check-label" for="bolsista">Bolsista</label>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <h3>Links de Redes Socias</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-facebook">Facebook</span>
                        <input type="text" class="form-control" placeholder="https://facebook.com" aria-label="Facebook" aria-describedby="basic-facebook">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-instagram">Instagram</span>
                        <input type="text" class="form-control" placeholder="https://instagram.com" aria-label="Instagram" aria-describedby="basic-instagram">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-linkedin">LinkedIn</span>
                        <input type="text" class="form-control" placeholder="https://linkedin.com" aria-label="Instagram" aria-describedby="basic-linkedin">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-tiktok">TikTok</span>
                        <input type="text" class="form-control" placeholder="https://instagram.com" aria-label="Instagram" aria-describedby="basic-tiktok">
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h3>Áreas de Interesse</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="beleza-e-estetica" value="beleza-e-estetica">
                        <label class="form-check-label" for="beleza-e-estetica">Beleza e Estética</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="bem-estar" value="bem-estar">
                        <label class="form-check-label" for="bem-estar">Bem-estar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="comunicacao-e-marketing" value="comunicacao-e-marketing">
                        <label class="form-check-label" for="comunicacao-e-marketing">Comunicação e Marketing</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="desenvolvimento-social" value="desenvolvimento-social">
                        <label class="form-check-label" for="desenvolvimento-social">Desenvolvimento Social</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="design-artes-arquitetura" value="design-artes-arquitetura">
                        <label class="form-check-label" for="design-artes-arquitetura">Design, Artes e Arquitetura</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="educacao" value="educacao">
                        <label class="form-check-label" for="educacao">Educação</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="gastronomia-alimentacao" value="gastronomia-alimentacao">
                        <label class="form-check-label" for="gastronomia-alimentacao">Gastronomia e Alimentação</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="gestao-negocios" value="gestao-negocios">
                        <label class="form-check-label" for="gestao-negocios">Gestão e Negócios</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="idiomas" value="idiomas">
                        <label class="form-check-label" for="idiomas">Idiomas</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="meio-ambiente-seguranca-saude-trabalho" value="meio-ambiente-seguranca-saude-trabalho">
                        <label class="form-check-label" for="meio-ambiente-seguranca-saude-trabalho">Meio Ambiente, Segurança e Saúde no Trabalho</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="moda" value="moda">
                        <label class="form-check-label" for="moda">Moda</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="saude" value="saude">
                        <label class="form-check-label" for="saude">Saúde</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tecnologia-informacao" value="tecnologia-informacao">
                        <label class="form-check-label" for="tecnologia-informacao">Tecnologia da Informação</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="turismo-hospitalidade" value="turismo-hospitalidade">
                        <label class="form-check-label" for="turismo-hospitalidade">Turismo e Hospitalidade</label>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h3>Nível de Ensino do Curso</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="emed" value="emed">
                        <label class="form-check-label" for="emed">EMED</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="aprendizagem" value="aprendizagem">
                        <label class="form-check-label" for="aprendizagem">Aprendizagem</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="livre" value="livre">
                        <label class="form-check-label" for="livre">Livre</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tecnico" value="tecnico">
                        <label class="form-check-label" for="tecnico">Técnico</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="idioma" value="idioma">
                        <label class="form-check-label" for="idioma">Idioma</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="graduacao" value="graduacao">
                        <label class="form-check-label" for="graduacao">Graduação</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="pos-graduacao-extensao" value="pos-graduacao-extensao">
                        <label class="form-check-label" for="pos-graduacao-extensao">Pós-graduação/Extensão</label>
                    </div>

                    <!-- Dropdown para Atendimento Corporativo -->
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownAtendimento" data-bs-toggle="dropdown" aria-expanded="false">
                            Atendimento Corporativo
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownAtendimento">
                            <li>
                                <input class="form-control" type="text" placeholder="Digite aqui...">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="mt-5">Cursos</h3>
                    <div class="input-group">
                        <span class="input-group-text">Insira 03 cursos</span>
                        <input name="first-course" type="text" aria-label="First Course" class="form-control">
                        <input name="secound-course" type="text" aria-label="Secound Course" class="form-control">
                        <input name="third-course" type="text" aria-label="Third Course" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <h3 class="mt-5">Unidades</h3>
                    <hr>
                    <h5 class="mt-5">Capital</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="centro-universitario-senac-santo-amaro" value="centro-universitario-senac-santo-amaro">
                        <label class="form-check-label" for="centro-universitario-senac-santo-amaro">Centro Universitário Senac - Santo Amaro</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="aclimacao" value="aclimacao">
                        <label class="form-check-label" for="aclimacao">Aclimação</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="francisco-matarazzo" value="francisco-matarazzo">
                        <label class="form-check-label" for="francisco-matarazzo">Francisco Matarazzo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="itaquera" value="itaquera">
                        <label class="form-check-label" for="itaquera">Itaquera</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jabaquara" value="jabaquara">
                        <label class="form-check-label" for="jabaquara">Jabaquara</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jardim-primavera" value="jardim-primavera">
                        <label class="form-check-label" for="jardim-primavera">Jardim Primavera</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="lapa-faustolo" value="lapa-faustolo">
                        <label class="form-check-label" for="lapa-faustolo">Lapa Faustolo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="lapa-scipiao" value="lapa-scipiao">
                        <label class="form-check-label" for="lapa-scipiao">Lapa Scipião</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="lapa-tito" value="lapa-tito">
                        <label class="form-check-label" for="lapa-tito">Lapa Tito</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="largo-treze" value="largo-treze">
                        <label class="form-check-label" for="largo-treze">Largo Treze</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="penha" value="penha">
                        <label class="form-check-label" for="penha">Penha</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="nacoes-unidas" value="nacoes-unidas">
                        <label class="form-check-label" for="nacoes-unidas">Nações Unidas</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="santana" value="santana">
                        <label class="form-check-label" for="santana">Santana</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sao-miguel-paulista" value="sao-miguel-paulista">
                        <label class="form-check-label" for="sao-miguel-paulista">São Miguel Paulista</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tatuape-cel-luis-americano" value="tatuape-cel-luis-americano">
                        <label class="form-check-label" for="tatuape-cel-luis-americano">Tatuapé Cel. Luís Americano</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tatuape-serra-braganca" value="tatuape-serra-braganca">
                        <label class="form-check-label" for="tatuape-serra-braganca">Tatuapé Serra de Bragança</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tiradentes" value="tiradentes">
                        <label class="form-check-label" for="tiradentes">Tiradentes</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="vila-prudente" value="vila-prudente">
                        <label class="form-check-label" for="vila-prudente">Vila Prudente</label>
                    </div>

                    <hr class="my-3">
                    <h5 class="">Grande São Paulo</h5>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="bertioga" value="bertioga">
                        <label class="form-check-label" for="bertioga">Bertioga</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="guarulhos-celestino" value="guarulhos-celestino">
                        <label class="form-check-label" for="guarulhos-celestino">Guarulhos Celestino</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="guarulhos-faccini" value="guarulhos-faccini">
                        <label class="form-check-label" for="guarulhos-faccini">Guarulhos Faccini</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="osasco" value="osasco">
                        <label class="form-check-label" for="osasco">Osasco</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="santos" value="santos">
                        <label class="form-check-label" for="santos">Santos</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="santo-andre" value="santo-andre">
                        <label class="form-check-label" for="santo-andre">Santo André</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sao-bernardo-do-campo" value="sao-bernardo-do-campo">
                        <label class="form-check-label" for="sao-bernardo-do-campo">São Bernardo do Campo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="taboao-da-serra" value="taboao-da-serra">
                        <label class="form-check-label" for="taboao-da-serra">Taboão da Serra</label>
                    </div>

                    <hr class="my-3">
                    <h5 class="">Interior</h5>

                    <?php
                        $unidades = [
                            "Americana",
                            "Araçatuba",
                            "Araraquara",
                            "Barretos",
                            "Bauru",
                            "Bebedouro",
                            "Botucatu",
                            "Campinas",
                            "Catanduva",
                            "Centro Universitário Senac - Águas de São Pedro",
                            "Centro Universitário Senac - Campos do Jordão",
                            "Franca",
                            "Guaratinguetá",
                            "Itapetininga",
                            "Itapira",
                            "Itu",
                            "Jaboticabal",
                            "Jaú",
                            "Jundiaí",
                            "Limeira",
                            "Marília",
                            "Mogi Guaçu",
                            "Ourinhos",
                            "Pindamonhangaba",
                            "Piracicaba",
                            "Presidente Prudente",
                            "Registro",
                            "Ribeirão Preto",
                            "Rio Claro",
                            "Salto",
                            "São Carlos",
                            "São João da Boa Vista",
                            "São José do Rio Preto",
                            "São José dos Campos",
                            "Sorocaba",
                            "Taubaté",
                            "Votuporanga",
                        ];

                        // Loop para gerar os checkboxes
                        foreach ($unidades as $unidade): 
                            $slug = strtolower(str_replace(' ', '-', $unidade))
                    ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="<?=$slug?>" value="<?=$slug?>">
                        <label class="form-check-label" for="<?=$slug?>"><?=$unidade?></label>
                    </div>
                    <?php endforeach?>
                </div>                
            </div>            
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $("#dateContact, #dateUpdate, #birthday").datepicker();
    });
</script>
</body>
</html>