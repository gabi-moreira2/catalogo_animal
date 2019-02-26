<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            include ("menu.php");
        ?>
        <h3 align="center">Animal cadastrado</h3>
        <?php
            $tipo = $_POST["tipo"];

            switch($tipo){

                case "ave":
                    include("Ave.php");
                    $ave = new Ave($_POST["especie"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["corP"], $_POST["alturaM_voo"]);
                    $ave->exibe_ave();
                    break;
                
                case "mamifero":
                    include("Mamifero.php");
                    $m = new Mamifero($_POST["especie"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["corP"], $_POST["velocidade_max"]);
                    $m->exibe_mamifero();
                    break;

                case "anfibio":
                    include("Anfibio.php");
                    $a = new Anfibio($_POST["especie"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["corP"], $_POST["tempo_submerso"]);
                    $a->exibe_anfibio();
                    break;

                case "reptil":
                    include("Reptil.php");
                    $r = new Reptil($_POST["especie"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["corP"], $_POST["tempo_submerso"]);
                    $r->exibe_reptil();
                    break;

                case "peixe":
                    include("Peixe.php");
                    $p = new Peixe($_POST["especie"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["corP"], $_POST["temperatura_media"]);
                    $p->exibe_peixe();
                    break;

                default:
                    echo "Não há animais registrados!";
            }
        ?>
    </body>
</html>