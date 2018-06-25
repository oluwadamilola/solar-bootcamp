<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="code.php" method="post">
    <input type="text" name="score" id="">
    <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$score = $_POST['score'];
if ($score >=15) {
    echo "75%";

}else {
    echo "40%";
}
}

< ? php
    include’db / db . php’; // asuming you have your database connection in that file

if (isset($_POST[‘submit’])) {
    if (($_POST[‘email’] && $_POST[‘password’])) {
        $password = sha1($_POST[‘password’]);
        $email = $_POST[‘email’];

//now lets check if user email in use

        $query = "SELECT * FROM users where email = '$email'";
        $count = $db_handle->numRows($query);
        if ($count == 0) {
            $sql = $db->query(“INSERT INTO users(password, email) VALUES(‘ $password’, ’ $email”);

// then lets send user verification link to their email using the phpmailer function

            if (!empty($sql)) {
                $query_user = "SELECT * FROM users";
                while ($user_id = mysqli_fetch_array($query)) {
                    $user_id = $user_id['id'];
                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . "activateme.php?id=" . $user_id;
                    $toEmail = $_POST["email"];
                    $subject = "email Activation";
                    $content = "Click this link to activate your account. <a href='" . $link . "'>" . $link . "</a>";
                    $mailHeaders = "From: EzeSunday\r\n";
                    if (mail($toEmail, $subject, $content, $mailHeaders)) {
                        $message = "Thank you For registering with us, check you email to activate your account.";
                    }
                }
            }

        } else {
            $message = "User Email is already in use.";
        }

    } else {
        echo "Fields must not be empty";
    }

}

?>