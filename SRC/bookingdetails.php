<?php
    include_once 'config.php'
?>

<?php 
    
    $rnumber = $_POST["rnumber"];
    $bnumber = $_POST["bnumber"];
    $time = $_POST["time"];
    $scount = $_POST["scount"];
    $date = $_POST["date"];

    $sql = "INSERT INTO safari_booking (route_id, boat_id, time_slot, seat_count, s_date)
            VALUES ('$rnumber', '$bnumber', '$time', '$scount', '$date')";

    if(mysqli_query($conn,$sql)) {
        echo "<script>
                alert('Successfull');
                window.location.href='../booking.php';
            </script>";
    }
    else {
        echo "<script>
                alert('UnSuccessfull');
                window.location.href='../booking.php';
            </script>";
    }

    mysqli_close($conn);

?>