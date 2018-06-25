<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

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
    
    <link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|3d-float" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/styles_foundation.css">
    <link rel="stylesheet" href="css/style-video.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">

</head>

<body>

<div class="breadcrumbs">
     <a href="index.php"><img src="images/logo.png" alt="" style="width: unset;
    padding-left: 135px;" > </a>
    
    <h2 class="base-title text-white p-t-100" style="text-align:left; padding-left:140px;00">Graduate Solar
                                           <div class="font-effect-shadow-multiple"> <span class="text-blue" style="color:red"> Academy.</h2></div>
                    </span>
    
</div>


<div class="container">

    <form action="control.php" method="post" id="tech-registration" class="needs-validation">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" placeholder="surname" name="surname" required>
            </div>
            <div class="form-group col-md-6">
                <label for="surname">First Name</label>
                <input type="text" class="form-control" id="othernames" placeholder="First Name" name="othernames" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="080__" name="phonenumber" required>
            </div>

            <div class="form-group col-md-6">
                <label for="university">University</label>
                <input type="text" class="form-control" id="othernames" placeholder="University" name="university" required>
            </div>
            <div class="form-group col-md-6">
                <label for="course">course Of Study</label>
                <select name="course" id="" class="class">
                <option value="course">choose...</option>
                <option value="Electrical Electronics Engineering">Electrical Electronics Engineering</option>
                <option value="Physics">Physics</option>
                <option value="Physics with Electronics">Physics with Electronics</option>
                </select>   
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Home Address in Lagos</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="address" name="address"required>
            </div>

             <!--<div class="form-group col-md-6">
                <label for="nyscid"> NYSC State Code</label>
                <input type="text" class="form-control" id="inputNysc" name="nyscid" required>
                <span class="help-text">Only Lagos and Ogun state corpers</span>
            </div>

           <div class="form-group col-md-6">
                <label for="inputState">LGA of PPA</label>
                <select id="inputState" class="form-control" name="lga">
                    <option selected>Choose..</option>
                    <option value="lga">Ogun State</option>
                    <option value="lga">Agege</option>
                    <option value="aje">Ajeromi-Ifelodun</option>
                    <option value="ali">Alimosho</option>
                    <option value="lga">Amuwo-Odofin</option>
                    <option value="lga">Apapa</option>
                    <option value="lga">Badagry</option>
                    <option value="lga">Eti-Osa</option>
                    <option value="lga">Epe</option>
                    <option value="lga">Ibeju-Lekki</option>
                    <option value="lga">Ifako-Ijaiye</option>
                    <option value="lga">Ikeja</option>
                    <option value="lga">Ikorodu</option>
                    <option value="lga">Kosofe</option>
                    <option value="lga">Lagos Mainland</option>
                    <option value="lga">Lagos Island+</option>
                    <option value="lga">Mushin</option>
                    <option value="lga">Ojo</option>
                    <option value="lga">Oshodi-Isolo</option>
                    <option value="lga">Shomolu</option>
                    <option value="lga">Surulere</option>
                    <option value="lga">Obafemi-Owode(ogun state)</option>
                </select>
            </div>-->
           
            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                <label for="project">Final Year Project Topic</label>
                <input type="text" class="form-control" id="inputZip" name="project" placeholder="Project Topic">
            </div>
             <div class="form-group col-md-2 col-xs-2"></div>
                <div class="col-md-8 col-xs-8 center-block">
            <button type="submit" class="btn btn-primary btn-lg" name="submit" id="mybtn">Submit</button>
            </div>
            <footer>
            Copyright © 2018 Inlaks. All Right Reserved | Website by Inlaks
            </footer>
        </div>
    
        
</div>
</form>
<script src="js/jquery-2.1.3.min.js"></script>
<script>    
    
</script>
</body>
</html>