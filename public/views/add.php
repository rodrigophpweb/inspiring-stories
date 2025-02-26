<?php 
    include ('header.php');
    include ('controller.php')
?>
    <main>
        <?php include('breadcrumb.php');?>
        <form method="POST">
            <section class="container formCad">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="dateContact" class="form-label"><strong>Data do Contato</strong></label>
                            <input type="date" class="form-control" id="dateContact" name="dateContact">
                            <span id="startDateSelected"></span>
                        </div>
                    </div>
            
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="dateUpdate" class="form-label"><strong>Data de Atualização da História</strong></label>
                            <input type="date" class="form-control" id="dateUpdate" name="dateUpdate">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cadUnico" class="form-label"><strong>Código Único do CRM</strong></label>
                            <input type="text" class="form-control" id="cadUnico" name="cadUnico" placeholder="12345678" maxlength="8">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="nameStudent" class="form-label"><strong>Nome Completo do Estudante</strong></label>
                        <input type="text" class="form-control" id="nameStudent" name="nameStudent" placeholder="Ayrton Senna da Silva" maxlength="255">
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="birthday" class="form-label"><strong>Data de Nascimento</strong></label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label"><strong>Gênero</strong></label>
                            <select class="form-select" id="gender" name="gender" aria-label="gender">
                                <option selected value="">Selecione</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                                <option value="3">Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="paganteBolsista" class="form-label"><strong>Pagante | Bolsista</strong></label><br>
                        <div class="form-check form-switch form-check-inline">
                            <input class="form-check-input" type="checkbox" role="switch" id="pagante" name="pagante" value="1">
                            <label class="form-check-label" for="pagante">Pagante</label>
                        </div>
                        <div class="form-check form-switch form-check-inline">
                            <input class="form-check-input" type="checkbox" role="switch" id="bolsista" name="bolsista" value="2">
                            <label class="form-check-label" for="bolsista">Bolsista</label>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <h3>Links de Redes Sociais</h3>
                        <?php include('partials/social-media.php')?>
                    </div>


                    <div class="col-md-12 mt-4">
                        <h3>Áreas de Interesse</h3>
                        <?php include('partials/areas-of-interests.php')?>                        
                    </div>

                    <div class="col-md-12 mt-4">
                        <h3>Nível de Ensino do Curso</h3>
                        <?php include('partials/school-of-level.php')?>                        

                        <!-- Dropdown para Atendimento Corporativo -->
                        <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownAtendimento" data-bs-toggle="dropdown" aria-expanded="false">Atendimento Corporativo</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownAtendimento">
                                <li><input class="form-control" type="text" placeholder="Digite aqui..."></li>
                            </ol>
                        </div>
                    </div>

                    <?php include('partials/schools.php');?>
                </div>            
            </section>

            <section class="resume">
                <div class="container">
                    <div class="mt-5 mb-3">
                        <label for="resumeHistory" class="form-label fw-bold">Breve Resumo da História</label>
                        <textarea class="form-control" id="resumeHistory" maxlength="700"></textarea>
                    </div>
                </div>
            </section>

            <section class="typeHistory">
                <div class="container">
                    <div class="col-md-12 mt-5">
                        <h3>Tipo da história</h3>
                        <?php include('partials/type-history.php');?>
                    </div>
                </div>
            </section>

            <section class="statusLinkOutros my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="status" class="form-label"><strong>Status</strong></label>
                            <select id="status" class="form-select" aria-label="Status">
                                <option selected>Selecione um dos itens</option>
                                <option value="Apurado">Apurado</option>
                                <option value="Publicado">Publicado</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="linkHistory" class="form-label"><strong>Link da História no Blog</strong></label>
                            <input type="url" class="form-control" id="linkHistory" placeholder="https://sp.senac.br/blog/um-programador-de-sucesso/">
                        </div>
                        <div class="col-md-4">
                            <h4>Outros Usos</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="impresa" value="impresa">
                                <label class="form-check-label" for="impresa">Impresa</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="campanhas" value="campanhas">
                                <label class="form-check-label" for="campanhas">Campanhas</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="midias">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-6">
                            <h4>Mídias</h4>
                            <?php
                                $midias = [
                                    'photo' => 'Foto',
                                    'video' => 'Vídeo',
                                    'audio' => 'Áudio'
                                ];
                            ?>

                            <?php foreach ($midias as $id => $label): ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="<?php echo $id; ?>" value="<?php echo array_search($id, array_keys($midias)) + 1; ?>">
                                    <label class="form-check-label" for="<?php echo $id; ?>"><?php echo $label; ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="col-md-6">
                            <h4>Upload de Arquivos</h4>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="obs">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-12">
                            <label for="observacao" class="form-label"><strong>Observação:</strong></label>
                            <textarea class="form-control" id="observacao" rows="3"></textarea>
                        </div>

                        <hr class="my-5">

                        <div class="col-md-12">
                            <h4>Direito de Uso de Imagem</h4>
                        </div>

                        <div class="col-md-6 my-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="direitoImagem" value="Áudio">
                                <label class="form-check-label" for="direitoImagem">Permite o direito de uso de imagem</label>
                            </div>
                        </div>

                        <div class="col-md-6">                        
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>

                        <div class="col-12 my-3">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>    
                    </div>
                </div>
            </section>
        </form>

        
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
            </ol>
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
        let dateContact = document.querySelector('#dateContact');
        let dateUpdate = document.querySelector('#dateUpdate');

        dateContact.addEventListener('change', (e)=>{
            let dateContactVal = e.target.value;

        });
    </script>
</body>
</html>