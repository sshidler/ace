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
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.php';
    exit();
}




if (isset($_POST['rName']))
{
    try {
        $sql = 'INSERT INTO registration SET
            rName = :rName,
            date = CURDATE()';
        $s = $pdo->prepare($sql);
        $s->bindValue(':rName', $_POST['rName']);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted name: ' . $e->getMessage();
        include '../includes/error.php';
        exit();
    }


} else {
    include 'registration.php';
}
