<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Academy</title>
    <meta name="description" content="This is page one.">
    <!-- foundation  -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/styles_foundation.css">
    <link rel="stylesheet" href="css/style-video.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-grid.min.css">

</head>
<body>
<div class="col-md-5 col-sm-5 col-xs-5 "> 
 <h4>Be part of Graduate Solar Boot Camp in Lagos Nigeria</h4>
<a class="btn btn-primary" href="exam.php?n=1" role="button">TAKE THE EXAM</a>
</div>
<?php
$numbers = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12, 13=> 13, 14=>14, 15=>15);
$random_key = array_rand($numbers, 1);
print $random_key;
?>

<!--<a class="btn btn-primary" href="exam.php?n=1" role="button">TAKE THE EXAM</a>-->

<?php
if (!empty($sql)) {
    $query_user = "SELECT * FROM users";
    while ($user_id = mysqli_fetch_array($user_query)) {
        $user_id = $user_id['id'];
        $link = "http ://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."login.php?id=" . $user_id;
        $subject ="WElcome to solar Graduate Bootcamp";
        $content ="click the link below to login to your account.<a href='".$link."'>".$link."</a>";
        $emailHeaders= "From: Dammy\r\n";
        if (mail($toEmail, $subject, $content, $emailHeaders)) {
            $message = "Thank you for Registering with us, check your email to activate your account";
        }
    }
}



function sendEmail($to, $authur, $msg, $subject, $cc = false, $bcc = false)
{
    $q = base_url();
    if ($q[7] == 'l')
        return 1;
        
        //$to = "eanibaba@inlaks.com";
        //$subject = "Hello Nurse";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <noreply@inlaks.com>' . "\r\n";
   // if ($cc) $headers .= 'Cc: ' . $cc . "\r\n";
   // if ($bcc) $headers .= 'Bcc: ' . $bcc . "\r\n";
        //$headers .= 'From: <noreply@inlaks.com>' . "\r\n";
        //$headers .= 'Cc: silverside3000@gmail.com' . "\r\n";

    $message = "
			<table width='100%' bgcolor='#E4E4E4'>		
			<tr>
			<td>
			<br><br><br>
			<table width='620' border='0' align='center' cellpadding='10' cellspacing='0' bgcolor='#FFFFFF'>
			  <tbody>
				<tr>
				  <td valign='top'><br>
                 
				    <br><br>
                	<p>" . $msg . ".</p>
					<br><br>
				  </td>
				</tr>
			  </tbody>
			</table>
			<br><br><br>
			&nbsp;&nbsp;
			</td>
			</tr>
			</table>";
                
        /*if (mail($to,$subject,$message,$headers))
        	echo 'Sent!!!';
        else
        	echo 'Not Sent';*/
    mail($to, $subject, $message, $headers);
    return 1;
}
?>

</body>
</html>
