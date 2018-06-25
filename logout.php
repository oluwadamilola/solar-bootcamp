<?PHP
include 'db_con.php';

session_unset();
session_start();
session_destroy();

/*$sql = "UPDATE `tech` SET score ='$score' WHERE surname = '$surname'";
$surname = $_SESSION['surname'];
$nyscid = $_SESSION['nyscid'];
$score = $_SESSION['score'];

if (mysqli_query($db_con, $sql)) {
    header("Location:home.php ");
}*/

header("Location: index.php");
?>
