<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
</head>
<body>
<table width="100%" border="3px">
    <thead border="3px" class="h-25">
    <tr>
        <td width="33%"><img src="logo seul vert.jpg" height="100"/></td>
        <td width="33%" align="center"><h1>Listes</h1></td>
        <td width="33%" align="right">Contact</td>
    </tr>
    </thead>

    <tbody class="h-50">
    <tr>
        <td colspan=3><?php
            foreach ($tableau as $nom) {
                echo $nom;
                echo "<br>";
            }
            ?></td>
    </tr>
    </tbody>



</table>
<footer>
    remerciements
</footer>

</body>
</html>