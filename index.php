<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
    </head>

    <body>
        <div class="navbar">
            <img src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
                <div class="acclogo"><a href="account.php"><img src="SRC/Index/dp.png" alt="Profile"></a></div>
            </div>
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
                Welcome to our Boat Safari Booking Website!<br>
                Prepare to embark on an extraordinary adventure and immerse yourself in the awe-inspiring beauty of nature.<br>
                Our platform is your gateway to an unforgettable experience as you explore the tranquil waterways and encounter breathtaking wildlife.
            </p>
        </div>

        <div class="home2">
            <p>
                Browse through our handpicked selection of boat safari packages, meticulously designed to cater to your unique interests.<br>
                From meandering rivers and expansive lakes to stunning coastlines, we provide access to diverse ecosystems teeming with life.
                </p>
            <img class src="SRC/Index/home2.png">
        </div>
        
        <!--Temp-->
        <div style="display: block; 
                    width: 400px; 
                    height: 1200px; 
                    background-color: #121212;
                    margin-left: 30px;">
        </div>
        
        
        
    </body>


    <footer>
        <div class="topfooter">

            <div class="bottomnavbar">
            <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
            </div>

            <div class="devider"></div>

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

            <div class="devider"></div>

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
                <a href="#"><img src="SRC/Index/Twitter.png" alt="Twitter"></a>
                <a href="#"><img src="SRC/Index/Whatsapp.png" alt="Whatsapp"></a>
            </div>
            <img src="SRC/Index/qr.png" alt="QR Code" class="qr">
            
        </div>

        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="contactUs.php"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>