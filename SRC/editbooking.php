<!DOCTYPE html>

<html>
<head>
    <title>Edit Bookings</title>
    <link rel="stylesheet" href="booking.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="mybookings.css?v=<?php echo time();?>">
</head>

<body>
<?php
    include('config.php');
    echo '<body style="background-color:#121212">';
    
    session_start();
    $id = $_SESSION["id"];

    if(isset($_GET['deleteid'])) {
        $deleteID = $_GET['deleteid'];

        $sql = "DELETE FROM safari_booking WHERE safari_id='$deleteID'";
    
        if($conn->query($sql)){
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Booking cancelled successfully');
                    alert('Your payment will be refunded shortly');
                    window.location.href='../mybookings.php';
                </script>";
        }
        else{
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Error cancelling safari');
                    window.location.href='../mybookings.php';
                </script>";
        }
        $con->close();
    }

    if(isset($_GET['updateid'])) {
        $updateID = $_GET['updateid'];

        $sql = "SELECT * FROM safari_booking WHERE safari_id='$updateID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $count = mysqli_num_rows($result);
          
        if($count == 1) {
            $date = $row["s_date"];
            $routeID = $row["route_id"];
            $boatID = $row["boat_id"];
            $timeSlot = $row["time_slot"];
            $seatCount = $row["seat_count"];
            
            echo "
                <form method='post' action='updatebooking.php?safariid=$updateID'>

                    <p class='info'>
                        Safari Booked Email : $id<br>
                        <span>You can only update the time slot and date.*</span><br><br>
                        Current Booking Details:<br>
                        Date : $date &nbsp|&nbsp Time Slot : $timeSlot &nbsp|&nbsp Route : $routeID &nbsp|&nbsp Boat : $boatID &nbsp|&nbsp Seat Count : $seatCount
                    </p>

                    <p class='formmain'>Select Time Slot</p>
                    <div class='formitems'>
        
                        <label class='timeslot'>
                            <p>08:00 A.M.</p>
                            <input type='radio' name='time' value='08_AM' required>
                        </label>
                        <label class='timeslot'>
                            <p>10:00 A.M.</p>
                            <input type='radio' name='time' value='10_AM' required>
                        </label>
                        <label class='timeslot'>
                            <p>12:00 P.M.</p>
                            <input type='radio' name='time' value='12_PM' required>
                        </label>
                        <label class='timeslot'>
                            <p>02:00 P.M.</p>
                            <input type='radio' name='time' value='02_PM' required>
                        </label>
                        <label class='timeslot'>
                            <p>04:00 P.M.</p>
                            <input type='radio' name='time' value='04_PM' required>
                        </label>
                        <label class='timeslot'>
                            <p>06:00 P.M.</p>
                            <input type='radio' name='time' value='06_PM' required>
                        </label>
                        
                    </div>

                    <p class='formmain'>Select a Date</p>
                    <div class='formitems'>
                        <label class='enterdate'>
                            <input type='date' name='date' min='2023-05-13' max='2023-12-31'  required>
                        </label>
                        <a href='schedule.php'>View Schedule</a>
                    </div>

                    <button type='submit' id='submitbutton'>Update</button>
                </form>
            ";
        }
    }
?>
</body>
</html>