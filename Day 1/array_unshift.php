<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $teams =  ["Alim", "Huzaifah", "Irpan", "Zaki" ];
    array_unshift($teams, "Ezzz", "Easy");
    foreach ($teams as $person){
        echo "$person <br>";
    }
?>
</body>
</html>