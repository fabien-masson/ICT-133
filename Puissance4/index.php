<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>
<TABLE>
    <?php
    for ($a = 0; $a < 8; $a++) {
        echo "<tr></tr>";
        for ($i = 0; $i < 8; $i++) {
            if ($a == 7) {
                if ($i == 0) {
                    echo "<td><img src='rouge.JPG'></td>";
                    for ($z = 0; $z < 5; $z++) {
                        echo "<td></td>";
                    }
                    echo "<td><img src='bleu.JPG'></td>";
                    echo "<td></td>";
                }
            } else {
                echo "<td></td>";
            }
        }
    }
    ?>
</TABLE>
</BODY>
</HTML>
