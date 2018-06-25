<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Academy</title>
    <meta name="description" content="This is page one.">
    <link rel="stylesheet" href="assets/libs/font-awesome.css">
    <link rel="stylesheet" href="assets/libs/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/libs/owl.theme.default.min.css" />
    <!-- foundation  -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/styles_foundation.css">
    <link rel="stylesheet" href="css/style-video.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">

</head>
<body>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white">
     <a href="index.php"> <h5 class="my-0 mr-md-auto font-weight-normal"><img src="images/logo.png" alt=""></h5></a> 
    </div>  

<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5 ">
        <img src="images\18.jpg">

</div>

    <div class="col-md-7 col-sm-7 col-md-7 col-xs-7">
        <div class="section-title">
            
            <h5 class="card-title">What you need to know</h5>
            
     <p class="card-text">
         <p style="font-size:20px">Before you take the Exam it is recommended that you download and study the document below.</p>
     <div class="wrapper">
    <a href="Psychology Of Selling - The Art Of Closing Sales - Brian Tracy.pdf" class="fancy-button pop-onhover bg-gradient1"download>
        <span>Download</span>
    </a>
    </div>
    </div>


         <?php if (!empty($_SESSION['surname'])) { ?> 

 <h5>Be part of Graduate Solar Bootcamp in Lagos Nigeria</h5>
 <div class="wrapper">
    <a href="exam.php?n=1" class="fancy-button pop-onhover bg-gradient1" role="button">
        <span>Take THe Exam</span>
    </a>
<?php 
} else {
    header("Location: saleslogin.php");
}
?>
    </div>
    </div>

    
    <footer>
    
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
					<p style="text-align:center">Copyright © 2018 Inlaks. All Right Reserved | Website by Inlaks</p>	
					</div>
				</div>				
			

    </footer>
</body>
</html>