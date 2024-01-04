<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 25/2/19
 * Time: 5:22 PM
 */

$servername = "localhost";
$username = "rashmi";
$password = "rashmi@123";
$dbname = "sih";

//create connection
$conn = new mysqli($servername , $username, $password, $dbname);
//check connection
if($conn-> connect_error)
{
    die("connection failed: ". $conn->connect.error);
}
    if(isset($_GET['phcid']))
        $i=$_GET['phcid'];
$sqli="UPDATE PHCregister set status=0 where PHCid=$i";
$result=$conn->query($sqli);
if($result)
{
    header("location:phcReq.php5");
}
$conn->close();
?>