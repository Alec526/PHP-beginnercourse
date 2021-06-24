<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <?php

    $servername = "localhost";
    $dbname = "id16658652_phpschool";
    $username = "id16658652_root";
    $password = "Q}l6%*M6D/pZROjL";

    try {
        $dbconn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"."<br>";
    } catch (PDOException $exc) {
        echo "Connection failed: " . $exc->getMessage();
    };

    $query = "select * from cursist";

    $stmt = $dbconn->prepare($query) or die ("Error 1.");
    $stmt->execute() or die ("Error 2.");
    $row = $stmt->fetch() or die ("Error 3.");

    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['cursistnr'] . "</td>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['roepnaam'] . "</td>";
        echo "<td>" . $row['straat'] . "</td>";
        echo "<td>" . $row['postcode'] . "</td>";
        echo "<td>" . $row['plaats'] . "</td>";
        echo "<td>" . $row['geslacht'] . "</td>";
        echo "<td>" . $row['geb_datum'] . "</td>";
        echo "<tr>";
    }

    ?>
</table>
</body>
</html>