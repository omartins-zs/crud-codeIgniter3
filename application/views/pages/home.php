<?php
// echo '<pre>';
// print_r($produtos);
// // print_r($dataContato);
// // print_r($contatos);
// // var_dump($deputados['ULTIMA_CONVERSA']);
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
            <h1 class="display-3 text-center mt-2">Lista de produtos</h1>
        </div>
    </div>

    <a href="<?= base_url() ?>produtos/add" class="btn btn-sm btn-success float-right mb-3 mt-3"><i class="fas fa-plus-square"></i> Novo Produto</a>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Produto</th>
                <th class="text-center">Preço</th>
                <th class="text-center">Status</th>
                <th class="text-center">Açoes</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td class="text-center"><?= $produto['id'] ?></td>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <!-- Verifica o status do Produto -->
                    <td class="text-center"><?php if ($produto['ativo'] == 1) : ?>
                            <!-- Se tiver == 1 está ATIVO -->
                            <a class="badge badge-success" href="<?php base_url() ?>produtos/status/<?= $produto['id'] ?>" title="Deixar inativo">Ativo</a>
                        <?php else :  ?>
                            <!-- Se tiver == 0 está INATTIVO -->
                            <a class="badge badge-warning" href="<?php base_url() ?>produtos/status/<?= $produto['id'] ?>" title="Deixar ativo">Inativo</a>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php base_url() ?>produtos/editar/<?= $produto['id'] ?>" title="Detalhes" class="btn btn-sm btn-warning"><i class="fas fa-pencil"></i></a>

                        <a href="<?= base_url() ?>produtos/apagar/<?= $produto['id'] ?>" title="Apagar cadastro" class="btn btn-sm btn-danger"> <i class="fas fa-trash-alt"></i></a>

                        <a href="<?php base_url() ?>produtos/detalhes/<?= $produto['nome'] ?>" title="Detalhes" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col">
            Total de Registro: <?= $total ?>
        </div>
    </div>

</div>

</div><!-- /.container -->

<?php $this->load->view('templates/js'); ?>