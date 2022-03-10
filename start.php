<?php session_start();
// Connecting to Database
// $host ="localhost";
// $user = "root";
// $pass ="";
// $db = 'randomized';

require_once 'config.php';

//Creating a connection object
// $mysqli = mysqli_connect($host, $user, $pass, $db);
// echo "<br>";

// if (!$mysqli){
// die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful";
// }

if(isset($_POST['submit'])){
    $_SESSION["slotID"] = $_POST['slots'];
    // echo  
    header("location:host.php");


    /*$result = "INSERT INTO `host_table`(`slotID`) VALUES ($slotID)";
    if(mysqli_query($mysqli,$result)){
        header("location:host.html");
    }
    else{
        echo "Error".mysqli_error($mysqli);
    }*/
}

?>

<html>
    <head><title> Slot Page</title></head>
    <body>
            <form action="" method="POST">
            <label for="slots">Select Slot:</label>
            <select name="slots" id="slots" value="">
                <option value="" disabled selected></option>
                <option value="1">Slot1</option>
                <option value="2">Slot2</option>
                <option value="3">Slot3</option>
                <option value="4">Slot4</option>
                <option value="5">Slot5</option>
                <option value="6">Slot6</option>
                <option value="7">Slot7</option>
                <option value="8">Slot8</option>
            </select>
            <input type = "submit" name="submit" onclick="test()"/>

            <script>
        var select;
        function test(){
            select = document.getElementById('slots');
            console.log(select.value);
        }
            </script>
</body>
</html>
