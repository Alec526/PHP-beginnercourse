<?php

$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

try {
    $dbconn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"."<br>";
} catch (PDOException $exc) {
    echo "Connection failed: " . $exc->getMessage();
};

$query = "select * from cursist";

$stmt = $dbconn->prepare($query) or die ("Error 1.");
$stmt->execute() or die ("Error 2.");
$row = $stmt->fetch() or die ("Error 3.");

while ($row = $stmt->fetch()) {

}




/*try {
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
*/
