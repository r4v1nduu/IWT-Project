<?php
    include('config.php');

    $name=$_POST["name"];
    $email=$_POST["email"];

    $sql = "SELECT * FROM newsletter WHERE email = '$email'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        $sql="INSERT INTO newsletter (name,email) VALUES ('$name','$email')";

        if(mysqli_query($conn,$sql)) {
            echo "<script>
                    alert('Successfull');
                    window.location.href='../index.php';
                </script>";
        }
        else {
            echo "<script>
                    alert('UnSuccessfull');
                    window.location.href='../index.php';
                </script>";
        }
        mysqli_close($conn);
    }
    else {
        echo "<script>
            alert('You have already subscribed to our Newsletter');
            window.location.href='../index.php';
        </script>";
    }



    
?>