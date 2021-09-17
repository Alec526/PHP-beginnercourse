<?php
session_start();

$gebruikers = [
        "gebruiker1" => ["wachtwoord" => "ab12", "rol" => "gebruiker"],
        "gebruiker2" => ["wachtwoord" => "cd24", "rol" => "gebruiker"],
        "admin1" => ["wachtwoord" => "ef48", "rol" => "admin"]
];

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($gebruikers[$_POST['inlognaam']])
    && $gebruikers[$_POST['inlognaam']] ['wachtwoord'] == $_POST['wachtwoord']) {
    $_SESSION['gebruikers'] = [
        'inlognaam' => $_POST['inlognaam'],
        'wachtwoord' => $gebruikers[$_POST['inlognaam']] ['wachtwoord'],
        'rol' => $gebruikers[$_POST['inlognaam']] ['rol']
    ];
    $message = "logged in: ".$_SESSION['gebruikers'] ['inlognaam']." | ".$_SESSION['gebruikers'] ['rol'];
} else {
    $message = "niet ingelogd";
}

print_r($_SESSION);

echo "<br>" . "<br>";

foreach ($gebruikers as $gebruiker => $contents) {
    echo $gebruiker . ": ";
    print_r($contents);
    echo "<br>" . "<br>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
</head>
<body>
<h1><?php echo $message ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="inlognaam">Gebruikersnaam:</label>
    <input type="text" name="inlognaam"><br>

    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord"><br>

    <input type="submit" name="knop">
</form>
<a href="gebruiker.php">ga naar website</a> <br>
<a href="admin.php">ga naar admin website</a> <br>
<a href="websession.php?logout">log uit</a>
</body>
</html>