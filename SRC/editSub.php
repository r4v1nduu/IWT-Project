<?php
    include ('config.php');
    echo '<body style="background-color:#121212">';

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
                <label for='name'>Change Name <input class='data' type='text' name='name' value='$name' required> </label> 
                <label for='email'>Your Email <input class='data' type='text' name='email' value='$email' required></label>
                
                <input class='button1' type='submit' name='updateSub' value='SUBMIT'>
                <input class='button2' type='submit' name='deleteSub' value='Remove Subscription'>
            </form>

            <script>
            document.getElementById('myaccount').onkeypress = function(e) {
                var key = e.charCode || e.keyCode || 0;     
                if (key == 13) {e.preventDefault();}} 
            </script>
        ";
        //Disable ENTER key form submitting (Source: StackOverflow)
    }
    else {
        //Fix for PHP header Location: skipping the alert box (Source: StackOverflow)
        echo "<script>
                alert('Email is not in our subscription list');
                window.location.href='../index.php';
            </script>";
    }
?>

<!DOCTYPE html>
<head>
    <title>Newsletter</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <style>
        body {
            margin: 0;
            background-color: #121212;
        }
        p {
            font-family: 'OutfitB';
            font-size: 18px;
            text-align: center;
            margin-top: 120px;
        }
        form {
            background-color: #27241D;
            border-radius: 6px;
            width: 300px;
            padding: 20px 10px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            font-family: 'OutfitR';
            font-size: 16px;
            text-align: center;
        }
        label {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .data {
            text-indent: 10px;
            background-color: #424242;
            border: none;
            border-radius: 6px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            margin-bottom: 20px;
            width: 250px;
            height: 30px;
            color: #FFFFFF;
            text-indet: 10px;
        }
        .button1, .button2 {
            border: none;
            border-radius: 6px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
            height: 30px;
            font-family: 'OutfitB';
            font-size: 14px;
            color: #000000;
        }
        .button1 {
            width: 100px;
            margin-top: 10px;
            background-color: #E0E0E0;
        }
        .button1:hover{
            background-color: #03C988;
            cursor: pointer;
            transition: 0.3s;
        }
        .button2 {
            width: 200px;
            margin-top: 40px;
            background-color: #EA5455;
        }
        .button2:hover{
            background-color: #ED2B2A;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>
<body>
</body>
</html>