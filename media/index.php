<!doctype html>
<html lang="pt_br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cálculo de Média!</title>
  </head>
  <body>
    <div class=container>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <form method="post" acition="">
            <div class="form-group">
                <label>Nota 01:</label>
                <input type="text" class="form-control" placeholder="Digite a nota 1..." name="nota1">
            </div>
            <div class="form-group">
                <label>Nota 02:</label>
                <input type="text" class="form-control" placeholder="Digite a nota 2..." name="nota2">
            </div>
            <button name="botao" type="submit" class="btn btn-primary">Calcular média</button>
            </form>
            </div>
            <div class="col-lg-4">
                <?php 
                    if(isset($_POST['botao'])){
                        $nota1 = $_POST['nota1'];
                        $nota2 = $_POST['nota2'];
                        @$media = ($nota1+$nota2)/2;
                        if($media >= 6){
                            echo '<br><div class="alert alert-success" role="alert">
                                    Aluno aprovado com média: '.$media.'</div>';
                        }else if (($nota1=="")||($nota2=="")) {
                            echo '<br><div class="alert alert-warning" role="alert">
                                    Preencha todas as notas para gerar a média</div>';
                        }else{
                            echo '<br><div class="alert alert-danger" role="alert">
                                    Aluno reprovado com média: '.$media.'</div>';
                        }
                        
                    }
                ?>
            </div>
        </div>
    </div>
  </body>
</html>