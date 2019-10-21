<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge"/>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1"/>
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet " media = "screen">
        <script src = "js/jquery.min.js"></script>
		<script src = "bootstrap/js/bootstrap.min.js"></script>
		<link type = "text/css" rel = "stylesheet" href = "estilo.css">
        <title>Orbis</title>
    </head>
    <body>
        <div class = "menu-perfil">
            <a href = "meuPerfil.php"><img src = "icones/perfil2.png" class = "foto-perfil-menu"></a>
        </div>
        <div class = "menu">
            <a href = "index.php" class = "botoes-menu"><img src = "icones/home.png"/></a></td>
            <a href = "pesquisar.php" class = "botoes-menu"><img src = "icones/pesquisar2.png"/></a>
            <a href = "mensagens.php" class = "botoes-menu"><img src = "icones/mensagem2.png"/></a>
            <a href = "mural.php" class = "botoes-menu"><img src = "icones/mural2.png"></a>
        </div>
        <div class = "corpo">
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
        </div>
    </body>
</html>