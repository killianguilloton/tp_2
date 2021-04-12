<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $usager = 'root';
    $motdepasse = '';
    $hote = 'localhost';
    $base = 'tp2_1932675';

    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $dbh = new PDO($dsn, $usager, $motdepasse);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec( 'SET CHARACTER SET UTF8' );

    return $dbh;
?>