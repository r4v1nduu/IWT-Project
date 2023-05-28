<?php
    include('config.php');
    
    session_start();
    $id = $_SESSION["id"];

    $sql = "SELECT * FROM registered_user WHERE email='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $email = $row["email"];
    $pass = $row["passwrd"];

    if(isset($_POST['update'])) {
        $fnameN = $_POST['fname'];
        $lnameN = $_POST['lname'];

        $sql = "UPDATE registered_user SET first_name='$fnameN', last_name='$lnameN' WHERE email='$id' ";
        if($conn->query($sql)){
            echo "<script>
                    alert('Data Updated Successfuly');
                    window.location.href='../account.php';
                </script>";
        }
        else{
            echo "<script>
                    alert('Data Update Error');
                    window.location.href='../account.php';
                </script>";
        }
        $con->close();
    }

    if(isset($_POST['delete'])) {
        $id = $_SESSION["id"];
        $sql = "DELETE FROM registered_user WHERE email='$id'";
        if($conn->query($sql)){
            echo "<script>
                    alert('Account was Deleted');
                    window.location.href='../index.php';
                </script>";
            session_destroy();
        }
        else{
            echo "<script>
                    alert('Error Deleting Account');
                    window.location.href='../index.php';
                </script>";
        }
        $con->close();
    }
?>
