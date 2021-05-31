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
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>



</body>
<?php
$array = ["De Spartelkuikens", "De Waterbuffels", "Plonsmderin", "Bommetje"];

foreach($array as $zwemclub){

}

for($i = 0; $i < 25; $i++){
    if($i % 5 == 0){
        echo "<img src='../imgEtc/swim.png'>";
    }
}
?>
</html>