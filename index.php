<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <!--Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)-->
        <link rel="stylesheet" href="SRC/CSS/index.css?v=<?php echo time();?>">
    </head>

    <body>
        <div class="navbar">
            <a href="index.php"><img class="mainlogo" src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <img src="SRC/Index/dropdown.png" alt="dropdown" id="line3">
                <a href="account.php" class="acclogo"><img src="SRC/Index/dp.png" alt="Profile"></a>
            </div>
        </div>

        <!--Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)-->
        <script src="navbar.js?v=<?php echo time();?>"></script>

        <div id="mininavbar">
            <a href="index.php"><button>Home</button></a>
            <a href="booking.php"><button>Book Ticket</button></a>
            <a href="gallery.php"><button>Gallery</button></a>
            <a href="review.php"><button>Reviews</button></a>
        </div>

        <div class="login">
            <a href="login.html"><button>Login</button></a>
            <a href="signup.html"><button>Sign Up</button></a>
        </div>

        <img class="mainimage" src="SRC/Index/safari.jpg" alt="boat safari">

        <p class="description">
            Experience the thrill of exploring unspoiled wilderness and encountering exotic wildlife on our <span> boat safari </span> tours. 
            <br>Our <span> expert guides </span> provide insightful commentary and cater to all budgets and preferences. 
            <br>Book your adventure today and <span> embark on a journey </span> of a lifetime!
        </p>

        <div class="home1">
            <img class src="SRC/Index/home1.png">
            <p>
                Booking your boat safari is now easier than ever!<br>
                With adjustable time slots, flexible planning, and a user-friendly website, reserving your spot and making payments is a breeze.<br>
                Enjoy affordable prices and unforgettable experiences with our exclusive discounts.
            </p>
        </div>

        <div class="home2">
            <p>
                Experience a unique boat safari with four captivating routes and personalized adventures.<br>
                Our fleet of five distinct boat types caters to your needs, guided by experts to the best wildlife spots.<br>
                Embark on a mesmerizing journey with up to 20 seats per trip.<br>
                Create lasting memories with loved ones - don't miss out on this incredible opportunity!
            </p>
            <img class src="SRC/Index/home2.png">
        </div>

        <div class="home3">
            <p>Ready to set sail? Book your boat safari today!</p>
            <a href="booking.php">Book Now</a>
        </div>

        <div class="home4">
            About Us
            <p>
                Aquaswift is your go-to boat safari booking website since 2020. 
                With a staff of 20, our mission is to connect you with extraordinary water adventures. 
                Our user-friendly platform ensures hassle-free reservations for captivating boat safari routes. 
                Join us on this exciting voyage, creating cherished memories amidst nature's beauty.
            </p>
        </div>
                
    </body>


    <footer>
        <div class="topfooter">

            <div class="bottomnavbar">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
            </div>

            <div class="devider" id="devider2"></div>

            <div class="payoptions">
                <p>Pay securely with</p>
                <div class="payments">
                    <img src="SRC/Payment/amex.png" alt="Amex">
                    <img src="SRC/Payment/visa.png" alt="Visa">
                    <img src="SRC/Payment/master.png" alt="Master">
                    <img src="SRC/Payment/maestro.png" alt="Maestro">
                    <img src="SRC/Payment/generic.png" alt="Generic">
                    <img src="SRC/Payment/google.png" alt="Google">
                    <img src="SRC/Payment/apple.png" alt="Apple">
                    <img src="SRC/Payment/paypal.png" alt="Paypal">
                </div>
            </div>

            <div class="devider" id="devider1"></div>

            <div class="footerdesc">
                Aqua Swift is your one-stop destination for unforgettable boat safaris. 
                Our knowledgeable guides will take you on an adventure of a lifetime, 
                providing you with an up-close encounter with exotic wildlife and breathtaking scenery. 
                Book your safari today and experience the magic of Aqua Swift!
            </div>

            <div class="devider" id="devider3"></div>

            <div class="contacts">
                <p>Contact Us</p>
                Tel: +94 77 123 4567<br>
                Fax: +94 33 222 3456<br>
                Email: aquaswift@outlook.com
            </div>

            <div class="devider"></div>

            <div class="socialscontainer">
                <a href="#"><img src="SRC/Index/Facebook.png" alt="Facebook"></a>
                <a href="#"><img src="SRC/Index/Instagram.png" alt="Instagram"></a>
                <a href="#"><img src="SRC/Index/Whatsapp.png" alt="Whatsapp"></a>
                <a href="#"><img src="SRC/Index/Twitter.png" alt="Twitter"></a>
            </div>
            <img src="SRC/Index/qr.png" alt="QR Code" class="qr">
            
        </div>

        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="contactUs.php"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>