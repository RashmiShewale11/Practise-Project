<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 25/2/19
 * Time: 3:50 PM
 */

$servername = "localhost";
$username = "rashmi";
$password = "rashmi@123";
$dbname = "sih";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['phcid']))
    $i = $_GET['phcid'];
$email = $_GET['email'];
$password = $_GET['password'];
echo "<script>console.log('$i')</script>";
echo "<script>console.log('$email')</script>";
echo "<script>console.log('$password')</script>";
$sqli = "UPDATE PHCregister set status='1' where PHCid='$i'";
$result = $conn->query($sqli);

if ($result) {
    //header("location:phcReq.php5");
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/src/SMTP.php';

$mail = new PHPMailer(TRUE);

try {

    $mail->setFrom('kaaate009@gmail.com', 'Kaate Master');
    $mail->addAddress($email, 'abc');
    $mail->Subject = 'Related to approve';
    $mail->Body = 'Email:-' .$email;

    /* SMTP parameters. */
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'kaaate009@gmail.com';
    $mail->Password = 'Tiger@123@1';
    $mail->Port = 587;

    /* Disable some SSL checks. */
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    /* Finally send the mail. */
    $mail->send();
}
catch (Exception $e)
{
    echo $e->errorMessage();
}
catch (\Exception $e)
{
    echo $e->getMessage();
}

$sql1="INSERT into login (email, password, usertype) values('$email','$password','PHC')";
$row=$conn->query($sql1);

$conn->close();
?>

