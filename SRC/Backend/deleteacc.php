<?php
    session_start(); // Start the session before any output

    include('config.php');

    // Ensure the session variable 'id' is set
    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
    } else {
        // If the session variable is not set, redirect to login page
        echo "<script>
                alert('Session not found. Please log in.');
                window.location.href='../../login.html';
              </script>";
        exit(); // Stop further execution
    }

    // Now we can safely output the background color styling
    echo '<body style="background-color:#121212">';

    $sql = "DELETE FROM registered_user WHERE user_email='$id'";
    
    if ($conn->query($sql)) {
        session_destroy(); // Destroy the session after successful deletion
        echo "<script>
                alert('Account Deleted Successfully');
                window.location.href='../../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error Deleting Account');
                window.location.href='../../index.php';
              </script>";
    }

    $conn->close(); // Use $conn instead of $con to close the connection
?>
