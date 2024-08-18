<?php
    include('Backend/config.php');
    echo '<body style="background-color:#121212">';

    $sql = "SELECT * FROM safari_booking ORDER BY s_date ASC";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        //JavaScript function to go back to the previous page (Source: StackOverflow)
        echo "<div class='back'><button class='back' onclick='history.back(-1)'>X</button></div>";
        echo "<table>";
        echo "<th>Date</th><th>Time Slot</th>";
        while($row = $result->fetch_assoc()){
            $date = $row["s_date"];
            $timeSlot = $row["time_slot"];
            echo "<tr>"
            ."<td>$date</td>"
            ."<td>$timeSlot</td>"
            ."</tr>";
        }
        echo "</table>";
    }
    else {
        //JavaScript function to go back to the previous page (Source: StackOverflow)
        echo "<script>
                alert('Schedule is empty!');
                window.window.history.back(-1);
            </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reservations</title>
        <!--Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)-->
        <link rel="stylesheet" href="CSS/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="CSS/schedule.css?v=<?php echo time();?>">
    </head>
</html>