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
    include '../includes/error.php';
    exit();
}




//validate inputs

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//validate name

$rName = test_input($_POST['rName']);

/*if (empty($_POST['rName'])) {
    $nameErr = "name is required";
} else {
    $rName = test_input($_POST['rName']);

    if (!preg_match("/^[a-zA-Z ]*$/", $rName)) {
        $nameErr = include '../includes/error.php';
    }
}*/


//validate address

$rAddress = test_input($_POST['rAddress']);
/*if (!preg_match("/^[a-zA-Z0-9 ]*$/", $rAddress)) {
    $addressErr = include '../includes/error.php';
}*/

//validate city
$rCity = test_input($_POST['rCity']);


//validate zip code
$rZip = test_input($_POST['rZip']);

//validate state
$rState = test_input($_POST['rState']);


//validate age
$rAge = test_input($_POST['rAge']);

//validate emergency contact name
$eContactName = test_input($_POST['eContactName']);

//validate emergency contact phone number
$eContactNum = test_input($_POST['eContactNum']);

//validate gender
$rGender = test_input($_POST['rGender']);

//validate event
$rEvent1 = test_input($_POST['rEvent1']);
$rEvent2 = test_input($_POST['rEvent2']);


//validate participant
$rParticipant = test_input($_POST['rParticipant']);
//validate shirt
$rShirt = test_input($_POST['rShirt']);

//validate accommodations
$rSpecial = test_input($_POST['rSpecial']);

/*


if (!preg_match("/^[0-9]*$/", $rZip)) {
    $zipErr = include '../includes/error.php';
}

if (!preg_match("/^[a-zA-Z]*$/", $rState)) {
    $stateErr = include '../includes/error.php';
}






*/


if (isset($rName) && isset($rAddress) && isset($rCity) && isset($rZip) && isset($rState) && isset($rAge) &&
    isset($eContactName) && isset($eContactNum)  && isset($rGender) && isset($rEvent1) && isset($rEvent1) && isset($rParticipant)
    && isset($rShirt) && isset($rSpecial) != '')
{

    try {
        $sql = 'INSERT INTO registration SET
            rName = :rName,
            rAddress = :rAddress,
            rCity = :rCity,
            rZip = :rZip,
            rState = :rState,
            rAge = :rAge,
            eContactName = :eContactName,
            eContactNum = :eContactNum,
            rGender = :rGender,
            rEvent1 = :rEvent1,
            rEvent2 = :rEvent2,
            rParticipant = :rParticipant,
            rShirt = :rShirt,
            rSpecial = :rSpecial,
            date = CURDATE()';
        $s = $pdo->prepare($sql);
        $s->bindValue(':rName', $rName);
        $s->bindValue(':rAddress', $rAddress);
        $s->bindValue(':rCity', $rCity);
        $s->bindValue(':rZip', $rZip);
        $s->bindValue(':rState', $rState);
        $s->bindValue(':rAge', $rAge);
        $s->bindValue(':eContactName', $eContactName);
        $s->bindValue(':eContactNum', $eContactNum);
        $s->bindValue(':rGender', $rGender);
        $s->bindValue(':rEvent1', $rEvent1);
        $s->bindValue(':rEvent2', $rEvent2);
        $s->bindValue(':rParticipant', $rParticipant);
        $s->bindValue(':rShirt', $rShirt);
        $s->bindValue(':rSpecial', $rSpecial);
        $s->execute();


    }

    catch (PDOException $e)
    {
        $error = 'Error adding submitted name: ' . $e->getMessage();
       // include '../includes/error.php';
        echo $e;
        exit();
    }
    include 'success.php';

}
else {
    include '../includes/error.php';
}



?>