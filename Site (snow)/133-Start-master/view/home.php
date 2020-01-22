<?php
/**
 * Site (snow) - home.php
 * User: Gwenael.WEST
 * Date: 16.12.2019
 */

// tampon de flux stocké en mémoire
ob_start();
$titre = "Rent A Snow - Accueil"

?>


<div class="row-fluid">
    <div class="span12">

        <div id="headerSeparator"></div>

        <div class="camera_full_width">
            <div id="camera_wrap">
                <div data-src="view/content/slider-images/4.jpg">
                    <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à
                        disposition.
                    </div>
                </div>
                <div data-src="view/content/slider-images/1.jpg">
                    <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des
                        sensations.
                    </div>
                </div>
                <div data-src="view/content/slider-images/2.jpg"></div>
            </div>
            <br style="clear:both"/>
            <div style="margin-bottom:40px"></div>
        </div>

        <div id="headerSeparator2"></div>

    </div>
</div>

/** Tableau mis en commentaire car à un petit bug 
<?php
$day =1;

$TableauMois = array(
        'Lundi' => 'Lun ',
        'Mardi' => 'Mar ',
        'Mercredi' => 'Mer ',
        'Jeudi' => 'Jeu ',
        'Vendredi' => 'Ven ',
        'Samedi' => 'Sam ',
        'Dimanche' => 'Dim '
);

echo '<div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>December<br><span style="font-size:18px">2019</span></li>
  </ul>
</div>';



echo '<ul class="weekdays">';
    foreach ($TableauMois as $value)
        echo "<li> $value </li>";

echo '</ul>';

echo '<ul class="days">';

for ($line = 0; $line < 5; $line++){
    for ($column = 0; $column < 7; $column++) {
        if ($day<31) {
            if ($day == date('j')){
                echo '<span style="background-color: #77737a"></span>';
            }
            echo '<li>';
            echo $day;
            $day++;
        }
    }echo '<br>';
}

//  Boucle qui met en évidence le jour actuel

if ($day == date('j')){
    echo '<span style="background-color: #77737a"></span>';
}
echo '</ul>';

?> **/


</div>

<div class="span12" id="divMain">
    <h1>Nos activités</h1>

    <p><strong>Rent A Snow</strong> est spécialisée dans la location de snows. Nous avons tout types de
        modèles :
    <ul>
        <li>des plus récents au plus anciens,
        <li>pour débutants ou confirmés,
        <li>pour de la piste ou du hors-piste
    </ul>
    La location peut se faire au jour, à la semaine, au mois ou à la saison.
    </p>
    <p>
        Nous proposons aussi des cours privés ou en petits groupe (4 personnes maximum) pour tous les
        niveaux avec des moniteurs certifiés par l'école suisse de snowboard au prix de 60.- /heure.
    </p>

    <br/>
    <br/>

    <div class="row-fluid">
        <div class="span3">
            <div class="box">
                <i class="icon-wrench"></i>
                <h4 class="title">Entretien</h4>
                <hr/>
                <p>
                    Le matériel est toujours contrôlé avant d'être mis à disposition des clients. A
                    chaque fois que vous louerez un snow, vous pouvez partir surfer tranquille.
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-leaf"></i>
                <h4 class="title">Environnement</h4>
                <hr/>
                <p>
                    Nous veillons à respecter l'environnement en utilisant au maximum du matériel
                    recyclable et en prenant de consommer un minimum d'énergie lors de nos activités au
                    magasin,
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-edit"></i>
                <h4 class="title">Contrat</h4>
                <hr/>
                <p>
                    Un contrat sera signé à chaque location. D'autre part nous travaillons en étroite
                    collaboration avec la Rega et garantissons des conditions de sauvetage optimales.
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-signal"></i>
                <h4 class="title">Signal</h4>
                <hr/>
                <p>
                    Pour ceux qui aiments les sensations forte, nous louons du matériel de protection
                    d'avalanches.
                </p>
            </div>
        </div>
    </div>

</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
