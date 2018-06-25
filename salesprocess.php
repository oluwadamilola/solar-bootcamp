<?php

include 'db_con.php';
session_start();
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
if (!empty($_SESSION['surname'])) {
    echo $_SESSION['surname'];
}

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['answered']=  array();
}

if ($_POST) {
    $number_sales = $_POST['number_sales'];
    $selected_choice = $_POST['choice'];

if (in_array($number_sales, $_SESSION['answered'])) {
    //user previously answered the questions
    $current = count($_SESSION['answered']);
    $next_question = $current + 1;
    header("Location: exam.php?n=" .$next_question);
    exit;
}

array_push($_SESSION['answered'], $number_sales);
    $next_choice = $number_sales+1;


    //get the total

    $query = "SELECT * FROM sales_q";
    $results = $db_con->query($query) or die($db_con->error);
    $total = $results->num_rows;

    

    //get correct choice from the database
    $question_no = $_SESSION['questions_arr'][$number_sales - 1];
    $query ="SELECT * FROM sales_c WHERE question_number = $question_no AND is_correct = 1";
    $result = $db_con->query($query) or die($db_con->error);

    $row = $result->fetch_assoc();
    $correct_choice = $row['id'];

    if ($correct_choice == $selected_choice) {
        $score = $_SESSION['score']++;
       // echo $score;

    }
    //save the score to the database
    if ($number_sales == $total) {

        $sql = $db_con->prepare("UPDATE `sales` SET `score` = '$score' WHERE email = '$email'");
        $sql->bind_param('s', $score); 
        $sql->execute();
        header("Location: final.php");
        exit();

    }
     else 
    {
        header("Location: exam.php?n=" .$next_choice);
    }
}
?>