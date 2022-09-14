<?php
// echo '<pre>';
// print_r($produto);
// // // print_r($dataContato);
// // // print_r($contatos);
// // // var_dump($deputados['ULTIMA_CONVERSA']);
// echo '</pre>';

// exit;
?>

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
            <h1 class="display-3 text-center mt-2">Atualizar produto</h1>
        </div>
    </div>

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Atualizar produto</li>
                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
            </ol>
        </nav>

        <!-- Formulário de novo cadastro  -->
        <form action="<?= base_url('produtos/salvar') ?>" name="form_add" method="post">

            <!-- Input text nome do produtos -->
            <div class="row">
                <div class="col-md-8">
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?php echo $produto->nome ?>" class="form-control">
                </div>
            </div> <!-- fim input text nome produtos -->

            <!-- Input text preço do produtos -->
            <div class="row">
                <div class="col-md-8">
                    <label>Preço</label>
                    <input type="text" name="preco" value="<?php echo $produto->preco ?>" class="form-control">
                </div>
            </div><!-- fim input text preco produtos -->

            <!-- Select produtos ativo ou inativo -->
            <div class="row">
                <div class="col-md-2">
                    <label>Ativo</label>
                    <select name="ativo" class="form-control">
                        <option value="1" <?php echo ($produto->ativo == 1 ? ' selected="selected"' : '') ?>>Sim</option>
                        <option value="0" <?php echo ($produto->ativo == 0 ? ' selected="selected"' : '') ?>>Nao</option>
                    </select>
                </div>
            </div><!-- fim select produtos ativo ou inativo -->

            <!-- Button submit(enviar) formulário -->
            <br />
            <div class="row">
                <div class="col-md-2">
                    <input type="hidden" name="id" value="<?php echo $produto->id ?>">

                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div><!-- fim do button submit(enviar) formulário -->


        </form>


        <!--Fim formulário de novo cadastro  -->
    </div>

</div><!-- /.container -->