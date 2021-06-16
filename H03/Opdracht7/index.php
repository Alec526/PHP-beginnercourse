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
$zwemclubs = array(
        "De Spartelkuikens" => 25,
    "De Waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
);
$zwemimage = "";

foreach($zwemclubs as $key => $value){

    $picnum = floor($value / 5);

    for($i = 0; $i < $picnum; $i++){

        $zwemimage = $zwemimage . "<img src='../imgEtc/swim.png'>";

    }

    echo $key . " " . $value . "$zwemimage" . "<br>";
    $zwemimage = "";

}

/*for($i = 0; $i < 25; $i++){
    if($i % 5 == 0){
        echo "<img src='../imgEtc/swim.png'>";
    }
}*/
?>
</html>