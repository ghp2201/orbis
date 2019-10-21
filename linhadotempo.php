<link type = "text/css" rel = "stylesheet" href = "estilo.css">
<?php
    require "funcoes.php";
    require "configpdo.php";
    $fotoUsuario   = "<img src = \"icones/perfil.png\">";
    $fotosPostagem = "";
    $consultaUsuario = $pdo -> prepare("select * from usuario order by codigoUsuario ");
    $consultaUsuario        -> execute();
    while ($row = $consultaUsuario -> fetch(PDO::FETCH_ASSOC)){
        $codigoUsuario = $row['codigoUsuario'];
        $nomeUsuario   = $row['nomeUsuario'];
    }
    $consultaPostagem = $pdo -> prepare("select * from postagem order by codigoPostagem");
    $consultaPostagem        -> execute();
    while ($row = $consultaPostagem -> fetch(PDO::FETCH_ASSOC)){
        $codigoPostagem = $row['codigoPostagem'];
        $textoPostagem  = $row['textoPostagem'];
    }
    postagem($fotoUsuario, $nomeUsuario, $textoPostagem, $fotosPostagem);
?>