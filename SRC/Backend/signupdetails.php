<?php
    include_once 'config.php';
    echo '<body style="background-color:#121212">';
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    // Check if passwords match
    if ($pass === $cpass) {

        // Check if the email is already registered
        $sql = "SELECT * FROM registered_user WHERE user_email = '$email'";
        $result = $conn->query($sql);

        if ($result && mysqli_num_rows($result) == 0) {
            // Insert the new user into the database
            $sql = "INSERT INTO registered_user (user_type, first_name, last_name, user_email, user_password)
                    VALUES ('Normal User', '$fname', '$lname', '$email', '$pass')";

            if (mysqli_query($conn, $sql)) {
                // Account creation successful, redirect to login
                echo "<script>
                        alert('Account created successfully');
                        window.location.href='../login.html';
                      </script>";
            } else {
                // Error during account creation, redirect to signup
                echo "<script>
                        alert('Error occurred while creating your account. Please try again.');
                        window.location.href='../signup.html';
                      </script>";
            }

        } else {
            // Email already registered, redirect to signup
            echo "<script>
                    alert('This email is already registered. Please try logging in.');
                    window.location.href='../signup.html';
                  </script>";
        }

        // Close the database connection
        mysqli_close($conn);

    } else {
        // Password mismatch, redirect to signup
        echo "<script>
                alert('Passwords do not match!');
                window.location.href='../signup.html';
              </script>";
    }
?>
