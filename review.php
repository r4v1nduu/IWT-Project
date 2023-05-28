<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/review.css?v=<?php echo time();?>">
    </head>

    <body>
        <div class="navbar">
            <img class="logo" src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
                <div class="acclogo"><a href="account.php"><img src="SRC/dp.png" alt="Profile"></a></div>
            </div>
        </div>

        <div class="login">
            <a href="login.html"><button>Login</button></a>
            <a href="signup.html"><button>Sign Up</button></a>
        </div>


        
        
        
    </body>


    <footer style="position: fixed; bottom: 0;">
        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="contactUs.php"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>