<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/contactUs.css?v=<?php echo time();?>">
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


        <form method="get" class="contactbox">

            <label><p>First Name</p> <input name="fname" type="text"></label>
            <label><p>Last Name</p> <input name="lname" type="text"></label>
            <label><p>Email Address</p> <input name="email" type="email"></label>
            <label><p>Contact Number</p> <input name="cnum" type="text" maxlength="10"></label>

            <label class="subject"><p>Subject</p> <input name="subject" type="text"></label>
            <label class="detail"><p>Details</p> <textarea name="detail"></textarea></label>

            <button type="submit">SUBMIT</button>

            <div class="contactbottom">
                <p>Tel: 071 222 3345</p><p>|</p>
                <p>Tel: 077 223 4456</p><p>|</p>
                <p>Fax: 033 224 5678</p><p>|</p>
                <p>Email: aquaswift.contact@outlook.com</p>
            </div>
        </form>
        
        
    </body>


    <footer style="position: fixed; bottom: 0;">
        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
    </footer>

</html>