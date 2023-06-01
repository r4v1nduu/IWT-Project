<?php
    include_once 'config.php';
    echo '<body style="background-color:#121212">';
?>

<?php 
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if ($pass == $cpass) {

        $sql = "SELECT * FROM registered_user WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            $sql = "INSERT INTO registered_user (user_id, first_name, last_name, email, passwrd, user_type)
                    VALUES ('', '$fname', '$lname', '$email', '$pass', '')";

            if(mysqli_query($conn,$sql)) {
                echo "<script>
                        alert('Successfull');
                        window.location.href='../login.html';
                    </script>";
            }
            else {
                echo "<script>
                        alert('Error !!');
                        window.location.href='../signup.html';
                    </script>";
            }
        }
        else {
            echo "<script>
                    alert('This Email has already been registered');
                    window.location.href='../signup.html';
                </script>";
        }












        

        mysqli_close($conn);
    }
    else {
        echo "<script>
                alert('Password MisMatch!');
                window.location.href='../signup.html';
            </script>";
    }
?>