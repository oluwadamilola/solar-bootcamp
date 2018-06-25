<?php
session_start();
?>
<?php include'db_con.php'?>
<?php

// set get for question number
$number =(int) $_GET['n'];

//get the total number of question;

$sql = "SELECT * FROM questions";
$results = $db_con->query($sql) or die($db_con->error);
$total = $results->num_rows;

if (!isset($_SESSION['questions_arr'])) {
    $questions_arr = range(1, $total);
    shuffle($questions_arr);
    $_SESSION['questions_arr'] = $questions_arr;
}

$question_no = $_SESSION['questions_arr'][$number - 1];

//query to get the questions
$query = "SELECT * from questions WHERE question_number =$question_no";
$result = $db_con->query($query) or die($db_con->error);
$questions = $result->fetch_assoc();

// query to get the choices from the database;

$query = "SELECT * from choices WHERE question_number = $question_no";
$choices = $db_con->query($query) or die($db_con->error);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="nofollow" />
        <title>Solar Academy</title>
        <meta name="description" content="This is page one.">


        <!-- foundation  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="dist/css/quest.css">

    </head>

    <body>
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white">
     <a href="index.php"> <h5 class="my-0 mr-md-auto font-weight-normal"><img src="images/logo.png" alt=""></h5></a> 
    </div> 
        <!-- Image and text -->
        <div class="container">
            <div class="current">
                <table width="100%">
                    <td width="50%">
                        <span>
                            <div class="countdown">0:20</div>
                        </span>
                    </td>
                    <td width="50%">
                        <div class="of">
                            <span>Question
                                <?php echo $number; ?> of
                                <?php echo $total; ?>
                            </span>
                        </div>
                    </td>
                </table>
                </div>
                <form id="question-form" class="needs-validation" novalidate action="process.php" method="POST">
                    <p class="questions" id="qname"> Question:
                        <?php echo $questions['question'] ?>
                    </p>
                    <div class="col-md-7">
                     <?php while ($row = $choices->fetch_assoc()) : ?>
                     
                     <div class="form-group">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="choice" id="invalidCheck" value="<?php echo $row['id']; ?>" aria-label="..."required>
                                    <?php echo $row['text']; ?>
      
     <!-- <div class="invalid-feedback">
        You must choose one option!
      </div>-->
    </div>
  </div>
   <?php endwhile; ?>
   <input type="submit" value="Submit" class="btn">
 <input type="hidden" name="number" value="<?php echo $number; ?>">
 </div>
                    
                </form>
               
</div>
<footer>
    
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
					<p style="text-align:center">Copyright © 2018 inlaks Limited, Made with  by inlaks.com</p>	
					</div>
				</div>				
			</div>
    </footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    <script>
        var timer2 = "0:20";
        var interval = setInterval(function () {


            var timer = timer2.split(':');
            //by parsing integer, I avoid all extra string processing
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            if (minutes < 0) {
                $('#question-form').submit();
                clearInterval(interval);
            }
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            //minutes = (minutes < 10) ?  minutes : minutes;
            $('.countdown').html(minutes + ':' + seconds);
            timer2 = minutes + ':' + seconds;
        }, 1000);
    </script>

    </html>