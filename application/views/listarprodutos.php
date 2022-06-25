<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lista de produtos da tabela produtos">

    <title>Lista de produtos da tabela produtos</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">



    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <div class="row">
            <h1>Lista de produtos</h1>

            <a href="<?php base_url('Produtos/add') ?>" class="btn btn-success margin-button15">Novo Produto</a>


            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th class="text-center">Produto</th>
                        <th class="text-right">Preço</th>
                        <th class="text-center">Açoes</th>
                    </tr>
                </thead>

                <?php
                $contador = 0;
                foreach ($produtos as $produto) {
                    echo '<tr>';
                    echo '<td>' . $produto->nome . '</td>';
                    echo '<td class="text-right">' . $produto->preco . '</td>';
                    echo '<td class="text-center">';
                    // Button de Editar
                    echo '<a href="/produtos/editar/' . $produto->id . '" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                    // Button de apagar
                    echo ' <a href="/produtos/apagar/' . $produto->id . '" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                    // Button ver detalhes
                    echo ' <a href="/produtos/detalhes/' . $produto->id . '" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
                    echo '</td>';
                    echo '</tr>';
                    $contador++;
                }
                ?>

            </table>

            <div class="row">
                <div class="col-md-12">
                    Total de Registro: <?php echo $contador ?>
                </div>
            </div>

        </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>