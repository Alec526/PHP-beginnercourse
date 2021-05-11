<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .red {
            border: red solid 10px;
        }
        .green {
            border: green solid 10px;
        }
    </style>
</head>
<body>
<?php

for($i = 1; $i <= 9; $i++){
    if($i % 2 == 0) {
        $class = "class ='red'";
    } else {
        $class = "class ='green'";
    }
    echo "<img " .$class. "src='../img/aap".$i.".jpg'>";
}

?>

</body>
</html>