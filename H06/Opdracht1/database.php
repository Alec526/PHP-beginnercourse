<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school2;port=3306', $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        JSC($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$user = 'schooluser';
$password = 'QtrG87xKr';

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}