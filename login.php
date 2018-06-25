<?php
session_start();
include 'db_con.php';
$surname = "";
$email = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // surname and nyscid sent from form 
    $surname = mysqli_real_escape_string($db_con, $_POST['surname']);
    $email = mysqli_real_escape_string($db_con, $_POST['email']);

    $sql = "SELECT id, score FROM tech WHERE surname = '$surname' and email = '$email'";
    $result = mysqli_query($db_con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_destroy();
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['surname'] = $surname;
        $_SESSION['score'] = $row['score'];


        if ($row['score'] != null) {
            header("Location: final.php");
            exit;
        }

        header("Location: tutorial.php");
    } else {
        $error = "Your surname or email is incorrect";
    }
}
      // If result matched $surname and email, table row must be 1 row
 
//session_start();
  //  $_SESSION['surname'] = $surname;
   // header("Location: quiz.php");
   //}
  // else {
    //   $errorMessage = "surname and nysc id is invalid";
  // }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Academy</title>
    <meta name="description" content="This is page one.">
   

    <!-- foundation  -->
    
    <link rel="stylesheet" href="css/style-video.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">

</head>
   <body>


    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white">
     <a href="index.php"> <h5 class="my-0 mr-md-auto font-weight-normal"><img src="images/logo.png" alt=""></h5></a> 
    </div>     
	<div class="container">  
    <div class="alert alert-primary" role="alert">
  Welcome!<?php if (!empty($_SESSION['name'])) {
                echo $_SESSION['name'];
            } ?>
            </div>             
        <div class="row">
         <div class="col-sm-4 col-md-6 left">               
                <form class="form-signin" method="POST" action="">
                    <h2 class="form-signin-heading">Please Sign In</h2>
                    <label for="surname" class="sr-only">Surname</label>
                    <input name="surname" type="text" id="" class="form-control" placeholder="Surname" required autofocus>
                    <br>
                    <label for="inputPassword" class="sr-only">E-mail Address</label>
                    <input name="email" type="email" id="inputPassword" class="form-control" placeholder=" E-mail Address" required>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="remember-me"> Keep me signed in
                        </label>
                    </div>
                    <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <br>
                    
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                    </form>
            </div>
            <div class="col-sm-6 col-md-6  hide-for-small-only hide-for-medium-only right">
                <img src="images/10.jpg" alt="">
            </div>
                    
                    </div>
                    
   </div>
   <script>
       $('.alert').alert();
   </script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>

