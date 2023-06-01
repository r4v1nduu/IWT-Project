<?php include 'SRC/editacc.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <link rel="stylesheet" href="SRC/account.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        
    </head>

    <body>
        <div class="navbar">
            <img class="logo" src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
                <div class="acclogo"><a href="account.php"><img src="SRC/Index/dp.png" alt="Profile"></a></div>
            </div>
        </div>

        <form method="post" action="SRC/logoff.php" class="logoff">
        <input name="logoff" type="submit" value="LOG OFF">
        </form>
        

        <div class="summery">
            <img class="bigdp" src="SRC/Index/dp.png">
            <div class="devider"></div>
            <p>
                <span id="username"> <?php echo $fname ?> &nbsp <?php echo $lname ?> </span><br>
                <span id="email"> <?php echo $email ?> </span><br><br>
                <span id="usertype">Premium User</span>
            </p>
        </div>

        <form class="detail" method="post" action="SRC/editacc.php">
            <div class="name">
                <p>First Name</p><input type="text" name="fname" value=<?php echo $fname ?> >
                <p>Last Name</p><input type="text" name="lname" value=<?php echo $lname ?> >
            </div>
            <div class="mail"><p>Email</p><input type="text" name="email" placeholder="ravindukavishka.119@outlook.com"></div>
        
            
            <input class="save" name="update" type="submit" value="Save Changes">
            

            <div class="bookings">
                <p>Last Booking</p>
                <div class="history" id="lastbooking">
                    2023 - 05 - 14
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    #25478
                </div>
            </div>

            <div class="extras">
                <a>Change Password</a>
                <a>Booking History</a>
                <a>Special Discounts</a>
            </div>
        
        </form>

        <form method="post" action="SRC/editacc.php">
            <input class="delete" name="delete" type="submit" value="Delete Account">
        </form>
        

    </body>

    <footer style="position: fixed; bottom: 0;">

        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="contactUs.php"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>