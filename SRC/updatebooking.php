<?php
    include_once 'config.php';
    echo '<body style="background-color:#121212">';

    session_start();
    $id = $_SESSION["id"];
    

    $safariID = $_GET["safariid"];
    $time = $_POST["time"];
    $date = $_POST["date"];

    $sql = "UPDATE safari_booking SET time_slot='$time', s_date='$date' WHERE  safari_id='$safariID' ";

    if(mysqli_query($conn,$sql)) {
        echo "<script>
                alert('Successfull');
                window.location.href='../mybookings.php';
            </script>";
    }
    else {
        echo "<script>
                alert('UnSuccessfull');
                window.location.href='../mybookings.php';
            </script>";
    }

    mysqli_close($conn);
?>