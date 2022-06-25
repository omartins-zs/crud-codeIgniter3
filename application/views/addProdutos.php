<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Novo cadastro</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">

        <div class="row">

            <h1>Novo produto</h1>
            <ol class="breadcrumb">
                <li><a href="<?php base_url('Produtos/index') ?>">Inicio</a></li>
                <li class="active">Novo produto</li>
            </ol>

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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>