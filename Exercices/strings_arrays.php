<?php
/**
 * Exercices - strings_arrays.php
 * User: Gwenael.WEST
 * Date: 25.11.2019
 */

$month = array('January','February','March','April','May','June','July','August','September','October','November','December');

$day =1; // déclaration de la variable qui affichera chaque jour

/**********       Tableau /Calendrier                                        *******/

echo '<table style="width: 100%"><tr >';
echo '<caption>';                              // Titre suivant le mois actuel
echo '<h1>';
echo date('F');
echo '</h1>';
echo '</caption>';
                                              // boucle qui crée les lignes et colonne du tableau
    for ($line = 0; $line < 5; $line++){
        echo '<tr>';
        for ($column = 0; $column < 7; $column++) {
            if ($day % 2 == 0){
                echo '<td style="background-color: aqua">';
            }
            else
            {
                echo '<td>';
            }
            if ($day<31) {
                echo $day;
                $day++;
            }
            echo '</td>';
        }echo '<br>';
    }

?>