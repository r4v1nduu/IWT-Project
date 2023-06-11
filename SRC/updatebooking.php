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
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Safari Detail Updated Successfully');
                window.location.href='../mybookings.php';
            </script>";
    }
    else {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Safari detail update unsuccessfull');
                window.location.href='../mybookings.php';
            </script>";
    }
    mysqli_close($conn);
?>