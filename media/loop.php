<!doctype html>
<html lang="pt_br">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<title>Loop -While e For!</title>
</head>
<body>
    <form method="post" action="">
        <div class="row">
            <div class="form-group col-lg-4">
                <select name="dia" class="form-control">
                    <option value="">Selecione um dia</option>
                    <?php
                    $n = 1;
                    while($n <= 31){
                        echo '<option value="'.$n.'">'.$n.'</option>';
                        $n++;
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <select name="mes" class="form-control">
                    <option value="">Selecione um mês</option>
                    <?php
                    for($a = 1; $a <= 12; $a++){
                        echo '<option value="'.$a.'">'.$a.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <select name="ano" class="form-control">
                    <option value="">Selecione um ano</option>
                    <?php
                    $n2 = 2020;
                    do{
                        echo '<option value="'.$n2.'">'.$n2.'</option>';
                        $n2--;
                    }while($n2 >= 1980);
                    ?>
            </div>
        </div>
    </form>
    <?php
        /*$n = 1;
        while($n <= 10){
            echo $n." ";
            $n++;
        }
        echo "<br>";

        for($a = 1; $a <= 10; $a++){
            echo $a." ";
        }
        echo "<br>";

        $n2 = 10;
        do{
            echo $n2." ";
            $n2--;
        }while($n2 >= 1);*/
    ?>
</body>
</html>