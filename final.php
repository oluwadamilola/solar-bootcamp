
<?php
session_start();

?>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="main.js"></script>

</head>
<body> 
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white">
     <a href="index.php"> <h5 class="my-0 mr-md-auto font-weight-normal"><img src="images/logo.png" alt=""></h5></a> 
    </div> 
  
    
  
<div class="container">
    <table class="table">
        
        <tbody>
            <tr>
                <th scope="row">Score</th>
                <td><h3><?php echo $_SESSION['score']; ?></h3></td>
              
            </tr>
            <tr>
                <th scope="row">Number of question Answered</th>
                <td>
                    <h3>19</h3>
                </td>
            
            </tr>
            <tr>
                <th scope="row">Remarks</th>
                <td><H2>Congratulations!</H2><img src="images/tick.jpg" alt="" srcset="" width="50" height="50"></td>
                
            </tr>
            <tr>
                <th scope="row">Percentage</th>
                <td><h3><?php
                 echo round(($_SESSION['score']/19) * 100); 
                ?>%</h3></td>
               

            </tr>
        </tbody>
    </table>
    <div class="wrapper">
        <a href="logout.php" class="fancy-button pop-onhover bg-gradient1">
            <span>Finish</span>
        </a>
    
    </div>
    </div>

</body>
</html>