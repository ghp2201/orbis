<?php
    function postagem($fotoUsuario, $nomeUsuario, $textoPostagem, $fotosPostagem)
    {
        echo "
            <div class = \"postagem\">
                <div class = \"fotoUsuario\">
                    $fotoUsuario
                </div>
                <div class = \"nomeUsuario\">
                    $nomeUsuario
                </div>
                <div class = \"fonteCorpo\">
                    $textoPostagem
                </div>
                <div>
                   <table>
                        <tr>
                            <td><a href = \"curtir.php\" class = \"fonteBotoesCorpo\"><img src = \"icones/gostei2.png\" class = \"iconeBotoesCorpo\"> Gostei</a></td>
                            <td><a href=\"compartilhar.php\" class = \"fonteBotoesCorpo\"><img src = \"icones/compartilhar2.png\" class = \"iconeBotoesCorpo\"> Compartilhar</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        ";
    }
?>