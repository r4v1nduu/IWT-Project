
<?php
include ('config.php');

    $id=$_POST['email'];

    $sql = "SELECT * FROM newsletter WHERE email='$id'";


    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $count = mysqli_num_rows($result);
          
    if ($count == 1) {
        
        $name = $row['name'];
        $email = $row['email'];

        echo "
            <p>Update Subscription Details</p>
            <form method='POST' action='updateSub.php'>
                <label for='name'>Change Name <input type='text' name='name' value='$name' required> </label> 
                <label for='email'>Your Email <input type='text' name='email' value='$email' required></label>
                
                <input type='submit' name='updateSub' value='SUBMIT'>
                <input type='submit' name='deleteSub' value='Remove Subscription'>
            </form>
        ";
/*        */
    }
    else {
        echo "<script>
                alert('Email is not in our subscription list');
                window.location.href='../index.php';
            </script>";
    }
?>