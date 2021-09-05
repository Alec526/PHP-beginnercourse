<?php
session_start();
if (isset ($_SESSION['gebruikers'])) {
    echo "welkom, " . $_SESSION['gebruikers'] ['inlognaam'];
    echo "<br>" . "<a href='websession.php?logout'>log uit</a>";
} else {
    header('location: websession.php?logout');
}