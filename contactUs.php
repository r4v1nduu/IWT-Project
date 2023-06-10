<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us</title>
        //Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/contactUs.css?v=<?php echo time();?>">
    </head>

    <body>
        <div class="navbar">
            <a href="index.php"><img class="mainlogo" src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
                <img src="SRC/Index/dropdown.png" alt="dropdown" id="line3">
                <a href="account.php" class="acclogo"><img src="SRC/Index/dp.png" alt="Profile"></a>
            </div>
        </div>

        //Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)
        <script src="navbar.js?v=<?php echo time();?>"></script>

        <div id="mininavbar">
            <a href="index.php"><button>Home</button></a>
            <a href="booking.php"><button>Book Ticket</button></a>
            <a href="gallery.php"><button>Gallery</button></a>
            <a href="review.php"><button>Reviews</button></a>
        </div>

        <form method="post" action="SRC/contactUsdata.php" class="contactbox">

            <label><p>First Name <span style="color:red;">*</span></p> <input name="fname" type="text" required></label>
            <label><p>Last Name</p> <input name="lname" type="text"></label>
            <label><p>Email Address <span style="color:red;">*</span></p> <input name="email" type="email"  required></label>
            <label><p>Contact Number</p> <input name="cnum" type="text" pattern="[0-9]{10}"></label>

            <label class="subject"><p>Subject <span style="color:red;">*</span></p> <input name="subject" type="text" required></label>
            <label class="detail"><p>Details <span style="color:red;">*</span></p> <textarea name="detail" required></textarea></label>

            <button type="submit">SUBMIT</button>

            <div class="contactbottom">
                <p>Tel: 071 222 3345</p><p id="devider">|</p>
                <p>Tel: 077 223 4456</p><p id="devider">|</p>
                <p>Fax: 033 224 5678</p><p id="devider">|</p>
                <p>Email: aquaswift.contact@outlook.com</p>
            </div>
        </form>
        
    </body>

    <footer style="position: fixed; bottom: 0;">
        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
    </footer>

</html>