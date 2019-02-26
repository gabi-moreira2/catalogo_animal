<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Exercício 1 - Herança de classes</title>
    </head>
    <body>
        <?php
            include("menu.php");
            include("Animal.php");
        ?>
        <fieldset>
            <legend>Cadastrar animal</legend>
            <?php
                if(empty($_GET)){
                    echo '<form action="form_animal.php" method="GET">
                             <p>
                                 <label>Tipo: </label>
                                 <input type="radio" name="tipo" value="ave"/>Ave
                                 <input type="radio" name="tipo" value="anfibio"/>Anfíbio
                                 <input type="radio" name="tipo" value="mamifero"/>Mamífero
                                 <input type="radio" name="tipo" value="peixe"/>Peixe
                                 <input type="radio" name="tipo" value="reptil"/>Réptil
                             </p>
                             <input type="submit" value="Próximo"/>
                             </form>';

                } else{
                    $tipo = $_GET["tipo"];

                    echo '<form action="exibe_animal.php" method="POST">
                             <p>
                                 <label>Peso (Kg): </label>
                                 <input type="number" name="peso" step="0.01"/>
                             </p>
                             <p>
                                 <label>Comprimento (m): </label>
                                 <input type="number" name="comprimento" step="0.01"/>
                             </p>
                             <p>
                                 <label>Altura (m): </label>
                                 <input type="number" name="altura" step="0.01"/>
                             </p>
                             <p>
                                 <label>Cor predominante: </label>
                                 <input type="text" name="corP"/>
                             </p>
                             <p>
                                 <label>Nome da espécie: </label>
                                 <input type="text" name="especie"/>
                             </p>';
                    
                    if($tipo == "ave"){
                        echo '<p>
                                 <label>Altura máxima de vôo (m): </label>
                                 <input type="number" name="alturaM_voo" step="0.01"/>
                              </p>';

                    } elseif($tipo == "anfibio" || $tipo == "reptil"){
                        echo '<p>
                                 <label>Tempo máximo submerso em água (h): </label>
                                 <input type="number" name="tempo_submerso" step="0.01"/>
                              </p>';
                    } elseif($tipo == "mamifero"){
                        echo '<p>
                                 <label>Velocidade máxima (Km/h): </label>
                                 <input type="number" name="velocidade_max" step="0.01"/>
                              </p>';
                    } else{
                        echo '<p>
                                 <label>Temperatura média (°C): </label>
                                 <input type="number" name="temperatura_media" step="0.01"/>
                              </p>';
                    }
                    echo '<input type="submit" value="Enviar"/>
                          <input type="hidden" name="tipo" id="tipo" value="'.$tipo.'"/> 
                          </form>';
                }
            ?>
        </fieldset>
    </body>
</html>