<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>assets/img/codeigniter.svg ?>" height="20" alt="MDB Logo" loading="lazy" />
            <small>Crud CodeIgniter 3</small>
        </a>
    </div>
</nav>

<div class="container" class="home">

    <div class="row">
        <div class="col">
            <h1 class="display-3 text-center mt-2">Novo produto</h1>
        </div>
    </div>

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo produto</li>
                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
            </ol>
        </nav>
        <!-- <ol class="breadcrumb">
                <li><a href="<?php base_url('Produtos/index') ?>">Inicio</a></li>
                <li class="active">Novo produto</li>
            </ol> -->

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" method="post">

            <!-- Input text nome do produtos -->
            <div class="row">
                <div class="col-md-8">
                    <label>Nome</label>
                    <input type="text" name="nome" value="" class="form-control">
                </div>
            </div> <!-- fim input text nome produtos -->

            <!-- Input text preço do produtos -->
            <div class="row">
                <div class="col-md-8">
                    <label>Preço</label>
                    <input type="text" name="preco" value="" class="form-control">
                </div>
            </div><!-- fim input text preco produtos -->

            <!-- Select produtos ativo ou inativo -->
            <div class="row">
                <div class="col-md-2">
                    <label>Ativo</label>
                    <select name="ativo" class="form-control">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </div><!-- fim select produtos ativo ou inativo -->

            <!-- Button submit(enviar) formulário -->
            <br />
            <div class="row">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div><!-- fim do button submit(enviar) formulário -->


        </form>
        <!--Fim formulário de novo cadastro  -->

    </div>

</div><!-- /.container -->

<?php $this->load->view('templates/js'); ?>