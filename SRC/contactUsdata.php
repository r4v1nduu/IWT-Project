<?php      
    include ('config.php');
    echo '<body style="background-color:#121212">';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cnum = $_POST['cnum'];
    $subject = $_POST['subject'];
    $detail = $_POST['detail'];

    $sql = "INSERT INTO contact_data
            VALUES ('$fname', '$lname', '$email', '$cnum', '$subject', '$detail')";
    
    if (mysqli_query($conn,$sql)) {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Data submitted successfully');
                window.location.href='../contactUs.php';
            </script>";
    }
    else {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Error submitting data');
                window.location.href='../contactUs.php';
            </script>";
    }
?>