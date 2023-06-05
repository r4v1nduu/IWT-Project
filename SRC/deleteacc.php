<?php
    include('config.php');
    echo '<body style="background-color:#121212">';

    session_start();
    $id = $_SESSION["id"];

    $sql = "DELETE FROM registered_user WHERE user_email='$id'";
    
    if($conn->query($sql)){
        session_destroy();
        echo "<script>
                alert('Account Deleted Successfully');
                window.location.href='../index.php';
            </script>";
    }
    else{
        echo "<script>
                alert('Error Deleting Account');
                window.location.href='../index.php';
            </script>";
    }
    $con->close();
?>