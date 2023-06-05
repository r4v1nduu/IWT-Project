<?php      
    include('config.php');
    echo '<body style="background-color:#121212">';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cnum = $_POST['cnum'];
    $subject = $_POST['subject'];
    $detail = $_POST['detail'];

    $sql = "INSERT INTO contact_data
            VALUES ('$fname', '$lname', '$email', '$cnum', '$subject', '$detail')";
    
    if(mysqli_query($conn,$sql)) {
        echo "<script>
                alert('Data submitted successfully');
                window.location.href='../contactUs.php';
            </script>";
    }
    else {
        echo "<script>
                alert('Error submitting data');
                window.location.href='../contactUs.php';
            </script>";
    }

?>