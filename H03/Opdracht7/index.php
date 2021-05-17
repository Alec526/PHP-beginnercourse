<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td{
            border: solid 2px gray;
            border-collapse: collapse;
            padding: 7px;
        }
    </style>
</head>
<body>



</body>
<?php
$array = [25, 32, 11, 23];

foreach($array as $zwemclub){
    echo "<img src='../imgEtc/".$zwemclub."'>";
}
?>
</html>