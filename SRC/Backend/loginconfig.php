<?php      
    session_start();  // Start the session at the very beginning

    include('config.php');

    $email = $_POST['email'];  
    $pass = $_POST['password'];  

    $sql = "SELECT * FROM registered_user WHERE user_email = '$email' AND user_password = '$pass'";  
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $count = mysqli_num_rows($result);
          
    if($count == 1) {
        $_SESSION["id"] = $email;
        
        // Display a success message and redirect
        echo "<script>
                alert('Login Successful!');
                window.location.href='../../index.php';
            </script>";
    } else { 
        // Display an error message and redirect
        echo "<script>
                alert('Incorrect Login Details!');
                window.location.href='../login.html';
            </script>";
    }

    // Any session-based redirect logic should happen after session handling
    if(isset($_SESSION["id"])) {
        header("Location: ../../index.php");
        exit(); // Ensure no further processing occurs after the redirect
    }
?> 

