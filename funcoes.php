<?php
    function postagem($fotoUsuario, $nomeUsuario, $textoPostagem, $fotosPostagem)
    {
        echo "
            <div class = \"postagem\">
                <div class = \"foto-usuario\">
                    $fotoUsuario
                </div>
                <div class = \"nome-usuario\">
                    $nomeUsuario
                </div>
                <div class = \"fonte-corpo\">
                    $textoPostagem
                </div>
                <div>
                   <table>
                        <tr>
                            <td><a href = \"curtir.php\" class = \"fonte-botoes-corpo\"><img src = \"icones/gostei2.png\" class = \"icone-botoes-corpo\"> Gostei</a></td>
                            <td><a href=\"compartilhar.php\" class = \"fonte-botoes-corpo\"><img src = \"icones/compartilhar2.png\" class = \"icone-botoes-corpo\"> Compartilhar</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        ";
    }
?>