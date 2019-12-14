//Fabien Masson
//14.12.19
//Calendar

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="month">
    <ul>
        //recuperation des données et definition de valeures par default
        <?php
        $moistab = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");

        if (isset($_GET['month'])) {
            $num = $_GET['month'];
            $mois = $moistab[$num - 1];
        } else {
            $mois = 'Janvier';
            $num = 1;
        }

        if (isset($_GET['year'])) {
            $annee = $_GET['year'];
        } else {
            $annee = "1970";
        }
        head($annee, $mois)
        ?>
    </ul>
</div>
//Affiche les jours de la semaine
<ul class="weekdays">
    <?php
    $sem = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
    for ($a = 0; $a < 7; $a++) {
        echo "<li>$sem[$a]</li>";
    }
    ?>
</ul>
//Recuperation des valeures
<?php
$date = mktime(0, 0, 0, $num, 1, $annee);

echo "<ul class='days'>";

if (isset($_GET['day'])) {
    $jour = $_GET['day'];
} else {
    $jour = date("d");
}
calendar($date, $jour);
echo "</ul>"
?>
</body>
</html>
<?php
//Fonction tête du calendrier
function head($mois, $annee)
{
    echo "<li>" . $mois . "<br>" . $annee . "</li>";
}

//Fonction corps du calendrier
function calendar($date, $jour)
{

    for ($previous = date("N", $date) - 1; $previous > 0; $previous--) {
        echo("<li><span class='noactive'>");
        echo(date("t", $date - 1) - ($previous - 1));
        echo("</span></li>");
    }

    for ($i = 1; $i < date("t", $date) + 1; $i++) {
        if ($i == $jour && date("m Y") == date("m Y", $date)) {
            echo "<li><span class=\"active\">$i</span></li>";
        } else {
            echo "<li>$i</li>";
        }
    }

    $after = 7 * 6 - date("t", $date) - date("N", $date) + 2;

    if ($after > 7) {
        $after = $after - 7;
    }
    for ($i = 1; $i != $after; $i++) {
        echo("<li><span class='noactive'>$i</span></li>");
    }
}

?>
