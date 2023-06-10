<?php      
    include ('config.php');
    echo '<body style="background-color:#121212">';

    $pass = $_POST['password'];  
      
      
    $sql = "SELECT * FROM adminpw WHERE adpass = '$pass'";  
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $count = mysqli_num_rows($result);
          
    if($count == 1) {
        echo "<script>
                alert('Welcome to the Admin Page');
            </script>";
    }
    else {  
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Admin Password is incorrect');
                window.location.href='../login.html';
            </script>";
    }
?>  