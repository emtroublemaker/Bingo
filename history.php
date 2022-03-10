<?php 
    require_once 'config.php';
    $sql = "SELECT * FROM host_table WHERE random_num ORDER BY ID ASC;";
    // $sql = "SELECT  random_num FROM host_table ORDER BY ID DESC LIMIT 1;";
    $emptyarr= [];
    if($result = mysqli_query($mysqli,$sql)){
        echo "";
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){ 
                $history = $row["random_num"]." ";
                echo $history;
            }
        }
    }
    else{
        echo "Error".mysqli_error($mysqli);
    }
?>
