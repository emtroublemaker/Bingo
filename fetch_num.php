<?php 
    require_once 'config.php';
    $sql = "SELECT  random_num FROM host_table ORDER BY ID DESC LIMIT 1;";
    if($result = mysqli_query($mysqli,$sql)){
        echo "";
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){ 
                // echo $row["random_num"];
                $fetch = $row["random_num"];
            }
        }
    }
    else{
        echo "Error".mysqli_error($mysqli);
    }
?>
 <script type="text/javascript">
   var fetching = "<?php echo"$fetch"?>";
  //  console.log(tic);

   function setTicket(){
     localStorage.setItem('fetching',fetching);
   }
   setTicket()

   function getTicket(){
     return localStorage.getItem('fetching');
   }
   console.log(getTicket());

    </script>
