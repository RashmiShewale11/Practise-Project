<html>
<body>
<?php/*
if(isset($_GET["error"])){
    $count = count($_GET["error"]);

    if($count != 0){
        foreach($errors as $error){
            echo $error."<br/>";
        }
    }
}
*/?>

<?php
//$conn = mysqli_connect("localhost","root","","file_upload");
include 'dbConfig.php';

$sql = "SELECT * FROM  phcreg";
$result = $db->query($sql);
?>
<table>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $file = $row["FilePath"];
            echo $file;
            // header("Content-type: application/xls");
            // <a href="<?php readfile($row["FilePath"]); ?>">
            ?>
            <tbody>
            <tr>
                <td> <?php echo $row["ID"] ?></td>
                <td><a href="show_doc.php?id=<?php echo $row['PHCid']?>" target="_blank">Some file</a></td>
            </tr>
            </tbody>
            <?php
            // echo "ID:  " . $row["ID"]. " ------------- Name: " . $row["FilePath"]. " " . $row["FileName"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($db);
    ?>
</table>
</body>
</html>