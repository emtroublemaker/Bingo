        <?php

            //Connecting to Database
            $host ="localhost";
            $user = "root";
            $pass ="";
            $db = 'randomized';

            //Creating a connection object
            $mysqli = mysqli_connect($host, $user, $pass, $db);
            echo "<br>";

            if (!$mysqli){
            die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{
                // echo "Connection done!";
            }

        ?>