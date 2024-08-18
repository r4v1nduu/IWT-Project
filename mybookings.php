<!DOCTYPE html>

<html>
    <head>
        <title>My Bookings</title>
        <!--Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)-->
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/mybookings.css?v=<?php echo time();?>">
    </head>

    <body>
        

        <?php
            include('SRC/config.php');
            echo '<body style="background-color:#121212">';
            
            session_start();
            $id = $_SESSION["id"];

            $sql = "SELECT * FROM safari_booking WHERE user_email='$id'";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th class='back'><a href='account.php'>Account Page</a></th></tr>";
                echo "<th>Date</th><th>Route ID</th><th>Boat ID</th><th>Time Slot</th><th>Seat Count</th><th></th>";
                
                while($row = $result->fetch_assoc()) {
                    
                    $safariID = $row["safari_id"];
                    $date = $row["s_date"];
                    $routeID = $row["route_id"];
                    $boatID = $row["boat_id"];
                    $timeSlot = $row["time_slot"];
                    $seatCount = $row["seat_count"];
                    
                    echo "<tr>"
                    ."<td>$date</td>"
                    ."<td>$routeID</td>"
                    ."<td>$boatID</td>"
                    ."<td>$timeSlot</td>"
                    ."<td>$seatCount</td>"
                    ."<td><a href='SRC/editbooking.php?updateid=$safariID'><button class='buttons1'>Edit</button></a> 
                        <a href='SRC/editbooking.php?deleteid=$safariID'><button class='buttons2'>Cancel</button></a></td>"
                    ."</tr>";
                }
                echo "</table>";
            }
            else {
                echo "<script>
                        alert('No previous bookings');
                        window.location.href='account.php';
                    </script>";
            }
        ?>
    </body>
</html>