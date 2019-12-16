<style>
    ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}

    /* Month header */
    .month {
        padding: 70px 25px;
        width: 100%;
        background: #1abc9c;
        text-align: center;
    }

    /* Month list */
    .month ul {
        margin: 0;
        padding: 0;
    }

    .month ul li {
        color: white;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    /* Previous button inside month header */
    .month .prev {
        float: left;
        padding-top: 10px;
    }

    /* Next button */
    .month .next {
        float: right;
        padding-top: 10px;
    }

    /* Weekdays (Mon-Sun) */
    .weekdays {
        margin: 0;
        padding: 10px 0;
        background-color:#ddd;
    }

    .weekdays li {
        display: inline-block;
        width: 13.6%;
        color: #666;
        text-align: center;
    }

    /* Days (1-31) */
    .days {
        padding: 10px 0;
        background: #eee;
        margin: 0;
    }

    .days li {
        list-style-type: none;
        display: inline-block;
        width: 13.6%;
        text-align: center;
        margin-bottom: 5px;
        font-size:12px;
        color: #777;
    }

    /* Highlight the "current" day */
    .days li .active {
        padding: 5px;
        background: #1abc9c;
        color: white !important
    }
</style>
<?php
/**
 * ICT-133-West - CalendriersJours.php
 * User: Gwenael.WEST
 * Date: 02.12.2019
 */

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

?>