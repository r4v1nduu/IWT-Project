<?php
    include_once 'config.php';
    echo '<body style="background-color:#121212">';

    session_start();
    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
    }
    
    $rnumber = $_POST["rnumber"];
    $bnumber = $_POST["bnumber"];
    $time = $_POST["time"];
    $scount = $_POST["scount"];
    $date = $_POST["date"];
    $terms = $_POST["terms"];

    if ($terms == "tCheck") {

        $sql = "INSERT INTO safari_booking (safari_id, user_email, route_id, boat_id, time_slot, seat_count, s_date)
        VALUES ('', '$id', '$rnumber', '$bnumber', '$time', '$scount', '$date')";

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
    }
    else {
        echo "<script>
                alert('Terms & Conditions not checked');
                window.location.href='../booking.php';
            </script>";
    }

    mysqli_close($conn);
?>