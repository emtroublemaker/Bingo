<!DOCTYPE HTML>  
<html>
<head>
    <form action="hello.html"></form>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
    <button type="button">Click</button>
    <form action="hello.html"></form>

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

$val = 'Math.floor(Math.random() * 25)';
// Random Number
$sql = "INSERT INTO `numbers`(`alternate`) VALUES ('$val')";
// $sql = "INSERT INTO alternate FLOOR(RAND()*(25-10+1))+10";

if(mysqli_query($conn, $sql)){
//   echo "Added successfully";
 
  echo "<br>";
  echo "Random number sent to local server";
}
else {
  echo "Error".mysqli_error($conn);
}
  //close connection
  mysqli_close($conn);

  ?>
  </body>
  <!-- <p id="rand"></p>
    <script>
    setInterval(randomNumber,3000);

function randomNumber(){
  document.getElementById("rand").innerHTML = Math.floor(Math.random() * 25);
}
</script> -->
  </html>
