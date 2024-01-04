<html>
<body>
<?php
$phc_id  = $_GET['id'];
include 'dbConfig.php';

$sql = "SELECT * FROM  phcreg where PHCid = ".$phc_id;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$name = $row["FileName"];
$path = $row["FilePath"];
$type = $row["FileType"];

header('Content-type: "' . $type . '"');
header('Content-Disposition: inline; filename="' . $name . '"');
header('Content-Transfer-Encoding: binary');
@readfile($path);

mysqli_close($conn);
?>

</body>
</html>