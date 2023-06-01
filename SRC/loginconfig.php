<?php      
    include('config.php');  
    $email = $_POST['email'];  
    $pass = $_POST['password'];  
      
      
        $sql = "SELECT * FROM registered_user WHERE email = '$email' AND passwrd = '$pass'";  
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        //Returns the number of rows in a result set
        $count = mysqli_num_rows($result);
          
        if($count == 1) {
            session_start();
            $_SESSION["id"] = $email;
            
            echo $_SESSION["id"];
            echo "<script>
                    alert('Login Successful!');
                </script>";
        }
        else{  
            echo "<script>
                    alert('Incorrect Login Details!');
                    window.location.href='../login.html';
                </script>";
        }

        if(isset ($_SESSION["id"])) {
            header ("Location:../index.php");
        }
?>  