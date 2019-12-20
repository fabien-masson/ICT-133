<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>C vers php</title>
</head>
<body>
<?php
$value = 20;
$step = 3;
echo "<h2><ul>";
for ($i = 0; $i < 10; $i++) {
    if ($value >= 30) {
        echo "<li>le nombre vaut " . $value."</li>";
    } else {
        echo "<li>le nombre est trop petit</li>";
    }
    $value = $value + $step;
}
echo "</ul></h2>";
?>
</body>
</html>