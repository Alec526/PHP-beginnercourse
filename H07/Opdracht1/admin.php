<?php
session_start();
if (isset ($_SESSION['gebruiker']) && $_SESSION['gebruiker'] ['rol'] == "admin") {
    echo "welkom admin, " . $_SESSION['gebruiker'] ['inlognaam'];
    echo "<br>" . '<a href="websession.php?logout">log uit</a>';
} else {
    header('location: websession.php?logout');
}