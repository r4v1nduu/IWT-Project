<?php
    session_start();
    
    
    if(isset($_POST["logoff"]))
    {
        session_destroy();
        echo "<script>
                alert('Log Out Successful!');
                window.location.href='index.php';
            </script>";
    }
    else {
        header("Location:index.php");
    }

?>