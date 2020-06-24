<?php
    try{
        DEFINE('HOST','localhost'); //Nome do servidor de BD
        DEFINE('DB','bbbbd_email'); //Nome do BD
        DEFINE('USER','lti'); //Nome de usuário do BD
        DEFINE('PASS','qwe123'); //Senha do BD
        // Criar a conexão com o BD
        $conect = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);
        $conect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "<b>ERRO DE PDO = </b>".$e->getMessage();
    }
