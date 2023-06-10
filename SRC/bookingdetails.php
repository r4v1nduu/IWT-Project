<?php
    include ('config.php');
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

    //Check whether the terms and conditions are checked
    if ($terms == "tCheck") {

        $sql = "INSERT INTO safari_booking (safari_id, user_email, route_id, boat_id, time_slot, seat_count, s_date)
        VALUES ('', '$id', '$rnumber', '$bnumber', '$time', '$scount', '$date')";

        if(mysqli_query($conn,$sql)) {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Safari Booking Successfull');
                    window.location.href='../booking.php';
                </script>";
        }
        else {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Safari Booking Unsuccessfull');
                    window.location.href='../booking.php';
                </script>";
        }
    }
    else {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Terms & Conditions not checked');
                window.location.href='../booking.php';
            </script>";
    }

    mysqli_close($conn);
?>