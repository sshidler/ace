<?php
$servername = "localhost";
$username = "sshidler_ace_user";
$password = "G03943543!";
$dbname = "sshidler_ace";

try
{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username,
        $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    echo "connected";
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../error.php';
    exit();
}