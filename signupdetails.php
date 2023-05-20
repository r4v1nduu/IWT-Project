<?php
    include_once 'config.php'
?>

<?php 
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if ($pass == $cpass) {
        $sql = "INSERT INTO registered_user (user_id, first_name, last_name, email, passwrd, user_type)
                VALUES ('', '$fname', '$lname', '$email', '$pass', '')";

        if(mysqli_query($conn,$sql)) {
            echo "<script>
                    alert('Successfull');
                    window.location.href='signup.html';
                </script>";
        }
        else {
            echo "<script>alert('Error in Insertion')</script>";
        }

        mysqli_close($conn);
    }
    else {
        echo "<script>
                alert('Password MisMatch');
                window.location.href='signup.html';
            </script>";
    }

    


?>