<?php
    include('config.php');
    echo '<body style="background-color:#121212">';

    if(isset($_POST['updateSub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE newsletter SET name='$name', email='$email' WHERE email='$email' ";
        if($conn->query($sql)) {
            echo "<script>
                    alert('Subscription Data Updated Successfuly');
                    window.location.href='../index.php';
                </script>";
        }
        else {
            echo "<script>
                    alert('Data Update Error');
                    window.location.href='./index.php';
                </script>";
        }
        $con->close();
    }

    if(isset($_POST['deleteSub'])) {
        $email = $_POST['email'];

        $sql = "DELETE FROM newsletter WHERE email='$email'";
        
        if($conn->query($sql)){
            echo "<script>
                    alert('Unsubscribed Successfully');
                    window.location.href='../index.php';
                </script>";
        }
        else{
            echo "<script>
                    alert('Error Unsubscribing!');
                    window.location.href='../index.php';
                </script>";
        }
        $con->close();
    }
?>