<?php

include '../includes/db.php';




//validate inputs

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//validate name
$contactName = test_input($_POST['contactName']);
if (!preg_match("/^[a-zA-Z ]*$/", $contactName)) {
    $nameErr = include '../includes/error.php';
}

//validate email

$contactEmail = test_input($_POST["contactEmail"]);
if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
    $emailErr = include '../includes/error.php';
}

//validate participant(athlete or volunteer
$contactParticipant = test_input($_POST['contactParticipant']);

//validate comment
$contactComment = test_input($_POST['contactComment']);



if (isset($contactName) && isset($contactEmail) && isset($contactParticipant) && isset($contactComment) != '')
{

    try {
        $sql = 'INSERT INTO contact SET
            contactName = :contactName,
            contactEmail = :contactEmail,
            contactParticipant = :contactParticipant,
            contactComment = :contactComment,
            date = CURDATE()';
        $s = $pdo->prepare($sql);
        $s->bindValue(':contactName', $contactName);
        $s->bindValue(':contactEmail', $contactEmail);
        $s->bindValue(':contactParticipant', $contactParticipant);
        $s->bindValue(':contactComment', $contactComment);
        $s->execute();


    }

    catch (PDOException $e)
    {
        $error = 'Error adding submitted name: ' . $e->getMessage();
        include '../includes/error.php';
        exit();
    }
    include 'success.php';

}
else {
    include '../includes/error.php';
}



?>
