<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(!isset($_POST['knop'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Naam: <input type="text" name="inlognaam" value=""><br>
        Email: <input type="text" name="email" value=""><br>
        <input type="submit" name="knop" value="verstuur">
    </form>
    <?php
} else {
    print_r($_POST);
}
?>

<?php
if($_POST['inlognaam'] == "doetje123"){
    echo "<a href='formulier.html'> Welkom admin </a>";
} elseif($_POST['email'] == "piet@worldonline.nl"){
    echo "<a href='formulier.html'> Welkom admin </a>";
}
?>

</body>
</html>