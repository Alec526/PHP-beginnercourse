<?php

$Username = "root";
$Password = "";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $Username, $Password);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        JSC($row);
    }
    $dbh = null;

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage   () . "<br/>";
    die();
}

function JSC($input){

    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
