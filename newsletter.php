<?php
include('SRC/config.php');

$name=$_POST["name"];
$email=$_POST["email"];

echo"$name<br>$email";

$sql="INSERT INTO newsletter(name,email) VALUES ('$name','$email')";




if(mysqli_query($conn,$sql)) {
    echo "<script>
            alert('Successfull');
          
        </script>";
}
else {
    echo "<script>
            alert('UnSuccessfull');
            
        </script>";
}
mysqli_close($conn);


?>