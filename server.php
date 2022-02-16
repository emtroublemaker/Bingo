  <!DOCTYPE html>
<html>
    <style>
        .butt{
            border: none;
            color: rgb(10, 9, 9);
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
            <form method = "post">
        <button  name="button1" class="butt" > Your Next Number is: </button>
    </form>
    <?php

//Connecting to Database
$host ="localhost";
$user = "root";
$pass ="";
$db = 'randomized';

//Creating a connection object
$conn = mysqli_connect($host, $user, $pass, $db);
echo "<br>";

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "Connection was successful";
echo "<br>";  


$num = range(1,25);
global $num;
// print_r($num);

echo "<br>";
shuffle($num);
// print_r($num);
echo "<br>";
print_r ($num);
// print_r ($num[0]);

// $arrayind = 0;
function sendTodb($conn, $num, ){
    $var = $num[0];
    // $sql = "INSERT into numbers VALUES ('$var')";
    $sql = "INSERT INTO `numbers`(`ID`, `alternate`) VALUES ('','$var')";
    if(mysqli_query($conn,$sql)){
        echo "<br>";
        echo "Added Succssfully";
        // print_r($num);
    }
    else{
        echo "Error".mysqli_error($conn);
    }
}

function randombtn($conn, $num){
    sendTodb($conn, $num);
    array_shift($num);
}

if(isset($_POST['button1']))
{
    randombtn($conn, $num);
}


// if(array_key_exists('button1', $_POST)) {
//     randombtn($conn, $num);
// }

?>
    <script>
        // localstorage.setITem(arr,$num);
    </script>
    </html>
