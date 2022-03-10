<?php session_start();
// Connecting to Database
// $host ="localhost";
// $user = "root";
// $pass ="";
// $db = 'randomized';

require_once 'config.php';

//Creating a connection object
// $mysqli= mysqli_connect($host, $user, $pass, $db);
// echo "<br>";

// if (!$mysqli){
// die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// echo "Connection was successful";
// echo "<br>";

if(isset($_POST['btn'])){
    $backval = $_POST['backval'];

    $slotID = $_SESSION["slotID"];


    $sql = "INSERT INTO `host_table`(`slotID`, `random_num`) VALUES ($slotID,$backval)";
    if(mysqli_query($mysqli,$sql)){
        echo "";
        //header("location:host.html");
    }
    else{
        echo "Error".mysqli_error($mysqli);
    }
}

// echo "<script>console.log(randomArr);</script>"


?>