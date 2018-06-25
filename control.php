<?php include 'db_con.php' ?>
<?php

/**
 * Created by PhpStorm.
 * User: dammy
 * Date: 02/04/2018
 * Time: 10:33
 */
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $surname = $_POST['surname'];
    $othernames = $_POST['othernames'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $course = $_POST['course'];
    $university = $_POST['university'];
    $address = $_POST['address'];
    $project = $_POST['project'];


    if (empty($surname)) {
        array_push($errors, "please insert your surname");
    }
    if (empty($email)) {
        array_push($errors, "email is required");
    }

    if (empty($phonenumber)) {
        array_push($errors, "please insert your phone number");
    }

    if (empty($address)) {
        array_push($errors, "please address is required");
    }

    $user_query = "SELECT email FROM tech WHERE email = ? LIMIT 1";

    if ($sql_statement = $db_con->prepare($user_query)) {
        $sql_statement->bind_param('s', $email);
        $sql_statement->execute();

        $sql_statement->bind_result($emailExist);
        $sql_statement->fetch();
    }
    if ($emailExist) {
        header("Location: error.php");
        exit();
    } else {

        $sql = $db_con->prepare("INSERT INTO tech(surname, othernames, email, phonenumber, course, university,address,project)
  VALUES(?,?,?,?,?,?,?,?)");

        $sql->bind_param("ssssssss", $surname, $othernames, $email, $phonenumber, $course, $university, $address, $project);
        $sql->execute();

        $query = $db_con->prepare("INSERT INTO login(surname, email) VALUES(?,?)");
        $query->bind_param("ss", $surname, $email);
        $query->execute();

        $to = $_POST['email'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: nonreply@inlaks.com" . "r\n" . 'X-Mailer/' . phpversion();
        $subject = "Graduate Solar Bootcamp 2018";
        $msg = "Dear Applicant".$_POST['surname'];
        $message = "Further to your application for Technical Track it is our pleasure to inform";
        $message .= " you have successfully register for 2018, graduate solar bootcamp</p>";
        $message .= "congratulations";

        mail($to, $subject, $message, $msg, $headers);

        echo "welcome";
        $sql->close();

        header("Location: login.php");

    }
}
