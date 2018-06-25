<?php
/**
 * Created by PhpStorm.
 * User: dammy
 * Date: 02/04/2018
 * Time: 10:33
 */
session_start();
$mysqli_host = "127.0.0.1";
$mysqli_user = "inlaks47_solarU";
$mysqli_pass = "r);x2q9SOKZ!";
$database = 'inlaks47_solardb';
$db_handle = new mysqli($mysqli_host, $mysqli_user , $mysqli_pass,$database);

 $errors = array( );

if ($_SERVER['REQUEST_METHOD'] == 'POST' )
 {
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

  if ($sql_statement = $db_handle->prepare($user_query)) {
      $sql_statement->bind_param('s', $email);
      $sql_statement-> execute();

      $sql_statement->bind_result($emailExist);
      $sql_statement->fetch();
  }
if ($emailExist) {
     header("Location: error.php");
    exit();
}
else {
    //die('Surname:'.$surname.'\n Othernames: '. $othernames.'\nEmail: '. $email.'\nPhone number: '.$phonenumber.'\n NYSC No: '.$nyscid.'\n Course: '. $course.'\n University: '. $university.'\n Address: '.$address.'\n Project Topic: '.$project);
   $sql = $db_handle->prepare("INSERT INTO tech  (surname, othernames, email, phonenumber, course, university,address,project, score)
  VALUES(?,?,?,?,?,?,?,?,?)");
   $sql->bind_param("sssssssss", $surname, $othernames, $email, $phonenumber, $course, $university,$address,$project, $score);
   $sql->execute();
    echo "welcome";
   $sql->close();
   
            $to = $_POST['email'];
            $to = $_POST['email'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
           $headers .= "From: nonreply@inlaks.com" . "r\n" . 'X-Mailer/' . phpversion();
            $subject = "Graduate Solar Bootcamp 2018";
            $msg = "Your registration is successful";
            $message.= " welcome to Inlaks Graduate Solar Bootcamp";
            $message.=" you have successfully register for 2018 graduate solar bootcamp"."\r\n";
            $message.="congratulations";
			

            mail($to, $subject, $message, $msg, $headers);

       
       
        
        header("Location: login.php");

    }
}