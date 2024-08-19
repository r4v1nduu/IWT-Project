<?php
    session_start(); // Start the session at the top

    include('config.php');

    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
    } else {
        // Handle the case where the session is not set
        echo "<script>
                alert('Session not found. Please log in.');
                window.location.href='../login.html';
              </script>";
        exit(); // Stop further execution
    }

    // Set the background color after the session is started
    echo '<body style="background-color:#121212">';

    $rnumber = $_POST["rnumber"];
    $bnumber = $_POST["bnumber"];
    $time = $_POST["time"];
    $scount = $_POST["scount"];
    $date = $_POST["date"];
    $terms = $_POST["terms"];

    // Check whether the terms and conditions are checked
    if ($terms == "tCheck") {
        $sql = "INSERT INTO safari_booking (safari_id, user_email, route_id, boat_id, time_slot, seat_count, s_date)
                VALUES (NULL, '$id', '$rnumber', '$bnumber', '$time', '$scount', '$date')";

        if(mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Safari Booking Successful');
                    window.location.href='../booking.php';
                </script>";
        } else {
            echo "<script>
                    alert('Safari Booking Unsuccessful');
                    window.location.href='../booking.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Terms & Conditions not checked');
                window.location.href='../booking.php';
            </script>";
    }

    mysqli_close($conn);
?>
