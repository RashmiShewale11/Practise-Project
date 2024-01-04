<?php
//Include the database configuration file
include 'dbConfig.php5';

if(!empty($_POST["state_id"])){
    //Fetch all state data
    $query = $db->query("SELECT * FROM district WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY dist_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //State option list
    if($rowCount > 0){
        echo '<option value="">Select dist</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['dist_id'].'">'.$row['dist_name'].'</option>';
        }
    }else{
        echo '<option value="">district not available</option>';
    }
}elseif(!empty($_POST["dist_id"])){
    //Fetch all city data
    $query = $db->query("SELECT * FROM taluka WHERE dist_id = ".$_POST['dist_id']." AND status = 1 ORDER BY tal_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //City option list
    if($rowCount > 0){
        echo '<option value="">Select tal</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['tal_id'].'">'.$row['tal_name'].'</option>';
        }
    }else{
        echo '<option value="">tal not available</option>';
    }
}
elseif(!empty($_POST["tal_id"])){
    //Fetch all city data
$query = $db->query("SELECT * FROM village WHERE tal_id = ".$_POST['tal_id']." AND status = 1 ORDER BY vil_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;

//City option list
if($rowCount > 0){
    echo '<option value="">Select village</option>';
    while($row = $query->fetch_assoc()){
        echo '<option value="'.$row['vil_id'].'">'.$row['vil_name'].'</option>';
    }
}else{
    echo '<option value="">Village not available</option>';
}
}
?>