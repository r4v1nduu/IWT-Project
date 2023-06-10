<?php      
    include('config.php');
    echo '<body style="background-color:#121212">';

    $email = $_POST['email'];  
    $pass = $_POST['password'];  

    $sql = "SELECT * FROM registered_user WHERE user_email = '$email' AND user_password = '$pass'";  
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $count = mysqli_num_rows($result);
          
    if($count == 1) {
        session_start();
        $_SESSION["id"] = $email;
            
        echo "<script>
                alert('Login Successful!');
            </script>";
    }
    else { 
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Incorrect Login Details!');
                window.location.href='../login.html';
            </script>";
    }

    if(isset ($_SESSION["id"])) {
        header ("Location:../index.php");
    }
?>  