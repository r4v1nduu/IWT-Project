<?php
    session_start();

    echo '<body style="background-color:#121212">';
    
    if(isset($_POST["logoff"]))
    {
        session_destroy();
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Log Out Successful!');
                window.location.href='../../index.php';
            </script>";
    }
    else {
        header("Location:../../index.php");
    }
?>