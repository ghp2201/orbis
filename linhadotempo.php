<link type = "text/css" rel = "stylesheet" href = "estilo.css">
<?php
    require "funcoes.php";
    require "configPdo.php";
    $fotoUsuario   = "<img src = \"icones/perfil.png\">";
    $nomeUsuario   = "Administrador";
    $textoPostagem = "Temos aqui um exemplo de postagem de texto, trabalharemos com um limite de 255 caracteres e até 8 fotos por post. A data estimada do lançamento oficial dessa plataforma é por volta de dezembro de 2020 ou janeiro de 2021";
    $fotosPostagem = "";
    postagem($fotoUsuario, $nomeUsuario, $textoPostagem, $fotosPostagem);
?>