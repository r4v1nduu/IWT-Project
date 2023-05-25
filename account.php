<?php include 'editacc.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <link rel="stylesheet" href="account.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="index.css">
        
    </head>

    <body>
        <div class="navbar">
            <img class="logo" src="SRC/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.html"><button>Home</button></a>
                <a href="booking.html"><button>Book Ticket</button></a>
                <a href="gallery.html"><button>Gallery</button></a>
                <a href="#"><button>About Us</button></a>
                <a href="account.html"><img src="SRC/dp.png" alt="Profile"></a>
            </div>
        </div>

        <form method="post" action="logoff.php">
        <input class="logoff" name="logoff" type="submit" value="LOG OFF">
        </form>
        

        <div class="summery">
            <img class="bigdp" src="SRC/dp.png">
            <div class="devider"></div>
            <p>
                <span id="username"> <?php echo $fname ?> &nbsp <?php echo $lname ?> </span><br>
                <span id="email"> <?php echo $email ?> </span><br><br>
                <span id="usertype">Premium User</span>
            </p>
        </div>

        <form class="detail" method="post" action="editacc.php">
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

        <form method="post" action="editacc.php">
            <input class="delete" name="delete" type="submit" value="Delete Account">
        </form>
        

    </body>

    <footer style="position: fixed; bottom: 0;">

        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="#"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>