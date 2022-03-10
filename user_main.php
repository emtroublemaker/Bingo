<?php 

    require_once 'config.php';

    //--------------Fetiching ticket from db -------------
    $i = 5;
    $star = "SELECT * from ticket WHERE ticket_id = $i";
    $result = $mysqli->query($star);  

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $ser =  unserialize($row["ticket"]);
            $arr_out = $ser;
            // echo "<br> id: ". $row["ticket_id"]. " - ticket: ".$ser. "<br>";
        }
    } else {
        echo "0 results";
    }
// }
    echo "<br>";
    // echo json_encode($arr_out); 

    print_r($arr_out);



 ?>
 <script type="text/javascript">
   var tic = "<?php echo"$arr_out"?>";
  //  console.log(tic);

   function setTicket(){
     localStorage.setItem('tickets',tic);
   }
   setTicket()

   function getTicket(){
     return localStorage.getItem('tickets');
   }
   console.log(getTicket());

    </script>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="BINGO.JS"> 
lineBingo();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user's page</title>
    
</head>
<script type = "text/javascript">
    var x = "<?php echo"$ser"?>";
    var arr = x.split(',').map(element => {
        return Number(element);
    });
</script>
<script>
$(function(){
    var url="fetch_num.php";
    setInterval(function(){
      $("#number").load(url);
    },1000);
});

// $.fn.myfunction = function () {
$(function(){

});


$(document).ready(function() {
  $("#history_num").click(function(){
      // console.log("you")
      var url="history.php";
    $("#history").load(url);
    // console.log("yoo");
    });
});
</script>
<div id="fetch">
<p style="display: inline;">Next number is: <p style="display: inline; margin: 0;" id="number"></p></p>
</div>

<button id = "history_num">Print history </button>
  <div id="history_num">
  <p style="display: inline;">-- <p style="display: inline; margin: 0;" id="history"></p></p>
  </div>

<!-- <form method="POST" action = "table.php"> -->
<form method="POST" action = "table.php">
  <input type ="button" name="showbtn" onclick="myFunction()" value="Show ticket"/><br><br>
  <!-- <input type ="submit" name="submitbtn" value="send to db ticket"/><br><br> -->
  <input type="hidden" id="array_data" name = "array_data"/>
  <input type="hidden" id="inuse_array_data" name = "inuse_array_data"/>
</form>
<style>
 th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table{
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        width: 50%;
        height: 50%;
    }
  #tag{
    background-color: red;
    }

    .myTable{
      display: none;
    }
</style>
<script>

  
function myFunction() {
  var table = document.getElementById("myTable");

  document.getElementById("0").innerHTML = arr[0];
  document.getElementById("1").innerHTML = arr[1];
  document.getElementById("2").innerHTML = arr[2];
  document.getElementById("3").innerHTML = arr[3];

  document.getElementById("4").innerHTML = arr[4];
  document.getElementById("5").innerHTML = arr[5];
  document.getElementById("6").innerHTML = arr[6];
  document.getElementById("7").innerHTML = arr[7];


  document.getElementById("8").innerHTML = arr[8];
  document.getElementById("9").innerHTML = arr[9];
  document.getElementById("10").innerHTML = arr[10];
  document.getElementById("11").innerHTML = arr[11];


  // console.log(abc);
  // console.log(inuse_arr);
  

  document.getElementById("myTable").style.display = "inline" ;
}

function changeColor(elem, elemId){
  var element = document.getElementById(elem);
  elem.style.backgroundColor ="lightblue";
  inuse_arr.splice(elemId, 1, abc[elemId]);
  // console.log(inuse_arr, elem, elemId);
  console.log(inuse_arr);
  t.value = (inuse_arr);
}

</script>
<body> 

<table id="myTable" class="myTable">
  <tr>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "0">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "1">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "2">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "3">cell</div></td>
  </tr>
  <tr>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "4">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "5">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "6">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "7">cell</div></td>
  </tr>
  <tr>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "8">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "9">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "10">cell</div></td>
    <td><div style ="background-color: #ffff00;" type="button"  onclick="changeColor(this, this.id)" id = "11">cell</div></td>
  </tr>
  </tr>
</table>
<p>Current Call: <p id="currentCall">&nbsp;</p></p>
<button onclick= "checkCornersBingo()">BINGO</button>
<br> 

</div>


</body>
</html>
<script>
function youWinCorners(sq1, sq2, sq3, sq4) {
    sq1.style.backgroundColor = "yellow";
    sq2.style.backgroundColor = "yellow";
    sq3.style.backgroundColor = "yellow";
    sq4.style.backgroundColor = "yellow";
    // document.getElementById("bCall").disabled = true;
    // document.getElementById("bBingo").disabled = true;
    document.getElementById("currentCall").innerHTML = "BINGO!";
    console.log("hey")
    alert("BINGO! You win!");
    throw new Error("Not an error! Just finishes any execution of the game!");
}

console.log(localStorage.getItem("fetching"));
function checkCornersBingo() {
    var sq1 = document.getElementById("0");
    var sq2 = document.getElementById("3");
    var sq3 = document.getElementById("8");
    var sq4 = document.getElementById("11");
    

    if (sq1.style.backgroundColor == "lightblue" && calledNumbers.includes(parseInt(sq1.value)) &&
            sq2.style.backgroundColor == "lightblue" && calledNumbers.includes(parseInt(sq2.value)) &&
            sq3.style.backgroundColor == "lightblue" && calledNumbers.includes(parseInt(sq3.value)) &&
            sq4.style.backgroundColor == "lightblue" && calledNumbers.includes(parseInt(sq4.value))) {
                youWinCorners(sq1, sq2, sq3, sq4);
                console.log("Hello");
                return;
    }
    else {
        document.getElementById("currentCall").innerHTML = "Not a valid bingo! Keep trying!";
        return;
    }
}
</script>