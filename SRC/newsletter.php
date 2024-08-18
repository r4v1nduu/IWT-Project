<?php
    include('config.php');
    echo '<body style="background-color:#121212">';

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM newsletter WHERE email = '$email'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        $sql="INSERT INTO newsletter (name,email) VALUES ('$name','$email')";

        if(mysqli_query($conn,$sql)) {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Successfully Subscribed');
                    window.location.href='../index.php';
                </script>";
        }
        else {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Subscription UnSuccessfull');
                    window.location.href='../index.php';
                </script>";
        }
        mysqli_close($conn);
    }
    else {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
            alert('You have already subscribed to our Newsletter');
            window.location.href='../index.php';
        </script>";
    }
?>