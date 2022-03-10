<?php
session_start();

require_once 'config.php';

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

?>

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
    <!-- <form action="hostdb.php" method="POST"> -->
    <form id="nextnum" action="" method="POST">
        <!-- <button id = "mybtn" class="butt" onclick="newnumber()"> Your Next Number is: </button> -->
        <button id = "mybtn"  class="butt" name = "btn" onclick="newnumber()"> Your Next Number is: </button>
        <input type = "hidden" name = "backval" id = "backval" value = ""/>
    </form>
    
    <p id="myarrs"></p>
    <br/>
    <p id="number"></p>
    <br>
    <p id="history">Number history: </p>
    
    <script>
    
        /*document.getElementById("nextnum").submit(function(e) {
            e.preventDefault();
        });*/
    
        function shuffle(array) 
        {
        let currentIndex = array.length,  randomIndex;

        while (currentIndex != 0) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
        }

        return array;
        }

        var arr = [1, 2 ,3 ,4 ,5 ,6 ,7 ,8 , 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40];
        shuffle(arr);
        

        function newnumber(){
                var randomArr = arr;//localStorage.getItem("randomarray");
                if(!localStorage.getItem("index"))
                {
                    localStorage.setItem("index", 0);
                    document.getElementById("history").innerHTML+=randomArr[0]+", ";
                    document.getElementById("number").innerHTML="Your next number is "+randomArr[0];
                    document.getElementById("backval").value = randomArr[0];
                } else{
                    var index = parseInt(localStorage.getItem("index"));
                    index+=1;
                    if(index<=arr.length-1){
                        //alert("index is: "+index);
                        localStorage.setItem("index",index);
                        document.getElementById("history").innerHTML+=randomArr[index]+", ";
                        document.getElementById("number").innerHTML="Your next number is "+randomArr[index];
                        document.getElementById("backval").value = randomArr[index];
                    } else{
                        alert("all numbers have been generated");
                    }
                }
            }            
        
        document.write("Randomized array:"+arr);
        document.write("<br>");

    </script>

    <body>
        <br><br><br><br>
        <button id="play">Toggle &amp; play</button><br>
        <br><br><br><br>
        <video id="video" class="u-none">
        <source src='http://vjs.zencdn.net/v/oceans.mp4' type='video/mp4'>
        </video>

        <style>
            #video {width: 300px;}

            /* Utility classes: */
            .u-none {display: none;}

        </style>

        <script>
        const EL_video = document.querySelector("#video");
        const EL_play = document.querySelector("#play");

        EL_play.addEventListener("click", () => {
        const isPaused = EL_video.paused;
        EL_video[isPaused ? "play" : "pause"]();
        EL_video.classList.toggle("u-none", !isPaused);
        });

        </script>
        <!-- <input type = "button" id="btnPlay" value="Play"/>
        <hr />
        <iframe id="video" width="420" height="315" frameborder="0" style="display:none" showfullscreen></iframe>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
        $("body").on("click","#btnPlay",function(){
        var url = $("#txtUrl").val();
        url = ('v=u_wB6byrl5k')[1];
        $("#video")[0].src = "https://www.youtube.com/embed/" + url;
        $("#video").show();
    });

    </script> -->
    </body>

</html>