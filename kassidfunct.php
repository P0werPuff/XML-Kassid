<?php
$elisa=simplexml_load_file("kassid.xml");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kassid</title>
</head>
<h1>Kõik nimed ja aasta</h1>
<body>
<table border="1">
    <tr>
        <th>Nimi</th>
        <th>Aasta</th>
    </tr>
    <?php
    foreach ($elisa->xpath("//kass") as $kass){
        echo "<tr>";
        echo "<td>". ($kass->nimi) . "</td>";
        echo "<td>". ($kass->sunniaasta) . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<h1>Kõik nimed ja aasta</h1>
<ul>
    <?php
    foreach ($elisa->xpath("//kass") as $kass){
        echo "<tr>";
        echo "<h1>". ($kass->nimi) . "</h1>";
        echo "<td>". ($kass->sunniaasta) . "</td>";
        echo "</tr>";
    }
    ?>
</ul>

<h1>Kõik kassid kes sunniaasta lopeb 10-ga.</h1>
<ul>
    <?php
    foreach ($elisa->xpath("//kass") as $kass){
        if ($kass->sunniaasta < 2011){
            echo "<li>". ($kass->nimi) . ",";
            echo ($kass->sunniaasta) . "</li>";

        }
    }
    ?>
</ul>
<h1>Oma Ulesanne: Otsige koiki nimed, mis algavad tähega M.</h1>
<ul>
    <?php
    foreach ($elisa->xpath("//kass") as $kass){
        if (substr(strtolower($kass->nimi),0,1)=="m"){
            echo "<li>". ($kass->nimi) . "</li>";

        }
    }
    ?>
</ul>
<footer>
    <a href="https://github.com/P0werPuff/XML-Kassid">GitHub</a>
</footer>
</body>