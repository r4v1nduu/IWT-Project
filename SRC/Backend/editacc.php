<?php
    session_start();

    include ('config.php');
    
    $id = $_SESSION["id"];

    $sql = "SELECT * FROM registered_user WHERE user_email='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $email = $row["user_email"];
    $pass = $row["user_password"];
    $usertype = $row['user_type'];
    
    echo '<body style="background-color:#121212">';

    //Run when clicking SAVE CHANGES button
    if (isset($_POST['update'])) {
        $fnameN = $_POST['fname'];
        $lnameN = $_POST['lname'];

        $sql = "UPDATE registered_user SET first_name='$fnameN', last_name='$lnameN' WHERE user_email='$id' ";
        if($conn->query($sql)) {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Data Updated Successfuly');
                    window.location.href='../account.php';
                </script>";
        }
        else {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Data Update Error');
                    window.location.href='../account.php';
                </script>";
        }
        $con->close();
    }

    //Run when clicking UPDATE PASSWORD button
    if(isset($_POST['updatepw'])) {
        $passO = $_POST['pass'];
        $passN = $_POST['npass'];

        if ($passN == NULL OR $passO == NULL) {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Please Fill both fields!');
                    window.location.href='../account.php';
                </script>";
        }
        else if ($pass == $passO) {
            $sql = "UPDATE registered_user SET user_password='$passN' WHERE user_email='$id' ";
            
            if($conn->query($sql)) {
                //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
                echo "<script>
                        alert('Password Updated Successfuly');
                        window.location.href='../account.php';
                    </script>";
            }
            else{
                //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
                echo "<script>
                        alert('Password Update Error');
                        window.location.href='../account.php';
                    </script>";
            }
            $con->close();
        }
        else {
            //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
            echo "<script>
                    alert('Current Password is wrong');
                    window.location.href='../account.php';
                </script>";
        }
    }

    //Run when clicking DELETE ACCOUNT button
    if(isset($_POST['delete'])) {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                let confirmAction = confirm('Are you sure you want to delete account?');
                if (confirmAction) {
                    window.location.href='deleteacc.php';
                } 
                else {
                    window.location.href='../account.php';
                }
            </script>";
    }
?>
