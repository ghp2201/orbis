<?php
    //conexão com o banco de dados orbis.sql
    $pdo = new PDO('mysql:host=localhost;dbname=orbis', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> exec("SET CHARACTER SET utf8");
?>