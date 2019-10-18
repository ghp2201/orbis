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
    </head>
    <body>
        <div class = "menuPerfil">
            <a href = "meuPerfil.php"><img src = "icones/perfil2.png"></a>
        </div>
        <div class = "menu">
            <a href = "index.php" class = "botoesMenu"><img src = "icones/home.png"/></a></td>
            <a href s= "pesquisar.php" class = "botoesMenu"><img src = "icones/pesquisar2.png"/></a>
            <a href = "mensagens.php" class = "botoesMenu"><img src = "icones/mensagem2.png"/></a>
            <a href = "mural.php" class = "botoesMenu"><img src = "icones/mural2.png"></a>
        </div>
        <div class = "corpo">
            <?php
                require "funcoes.php";
                $fotoUsuario = "<img src = \"icones/perfil.png\">";
                $nomeUsuario = "Administrador";
                $textoPostagem = "Temos aqui um exemplo de postagem de texto, trabalharemos com um limite de 255 caracteres e até 8 fotos por post. A data estimada do lançamento oficial dessa plataforma é por volta de dezembro de 2020 ou janeiro de 2021";
                $fotosPostagem = "";
                postagem($fotoUsuario, $nomeUsuario, $textoPostagem, $fotosPostagem);
            ?>
        </div>
    </body>
</html>