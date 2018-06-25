<?php 
include 'db_con.php';
session_start();
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
if(!empty($_SESSION['surname'])){
    echo $_SESSION['surname'];
}

if (!isset($_SESSION['score'])) {
    $_SESSION['score']= 0;
    $_SESSION['answered'] = array();
}

if ($_POST) {
    $number = $_POST['number'];
    $selected_choice =$_POST['choice'];
    //echo $number.'<br>'
   // echo $selected_choice;

   if (in_array($number, $_SESSION['answered'])) {
       // User has previously answered this question, fail fast.
       $current = count($_SESSION['answered']);
       $next_question = $current + 1;
       header("Location: quiz.php?n=" . $next_question);
       exit;
   }

   array_push($_SESSION['answered'], $number);

   $next = $number+1;

 
    // get total
    $query = "SELECT * FROM questions";
    $results = $db_con->query($query) or die($db_con->error);
   $total = $results->num_rows;
    //get correct choice

    $question_no = $_SESSION['questions_arr'][$number - 1];
    $query = "SELECT * FROM choices WHERE question_number = $question_no AND is_correct = 1";
    $result = $db_con->query($query) or die($db_con->error);

    $row = $result->fetch_assoc();
    $correct_choice = $row['id'];

    if ($correct_choice == $selected_choice) {
           $score = $_SESSION['score']++;
         $score;
       // echo $score;

    }

    if ($number >= $total) {

        $sql = $db_con->prepare("UPDATE `tech` SET `score` = '$score' WHERE email = '$email'");
        $sql->bind_param('s', $score);
        $sql->execute();
        
        header("Location: final.php");
        exit();

    }
    else {
        header("Location: quiz.php?n=".$next);
    }

   /* function passScore($totalScore)
    {
        var_dump($sql = $db_con->prepare("UPDATE tech SET score=? WHERE nyscid ='$nyscid'"));
        $sql->bind_param('ss', $score);
        $sql->execute();

    }*/
}
?>