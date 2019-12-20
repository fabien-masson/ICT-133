<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<h1>SI-CMI2a</h1>
<?php
$tab = array("Fabien", "David", "Miguel", "benoit", "Johnny", "Kevin", "Christopher", "Dmitri", "etc...");
echo "<ul>";
for ($i = 0; $i < 9; $i++) {
    $a = $i + 1;
    echo "<li id=div$a>$tab[$i]</li>";
}
echo "</ul>";
?>
</body>
</html>