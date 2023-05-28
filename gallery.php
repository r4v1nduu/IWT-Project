<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Booking Page</title>
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/gallery.css?v=<?php echo time();?>">

        <script>
            const element = document.querySelector("#container");

element.addEventListener('wheel', (event) => {
  event.preventDefault();

  element.scrollBy({
    left: event.deltaY < 0 ? -30 : 30,
    
  });
});
        </script>

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

        <div class="login">
            <a href="login.html"><button>Login</button></a>
            <a href="signup.html"><button>Sign Up</button></a>
        </div>

        <div class="imagecontainer" id="container">
            <div class="images">
                <img src="SRC/Gallery/gallery (15).jpg" alt="Gallery01">
                <img src="SRC/Gallery/gallery (2).jpg" alt="Gallery02">
                <img src="SRC/Gallery/gallery (5).jpg" alt="Gallery03">
                <img src="SRC/Gallery/gallery (9).jpg" alt="Gallery04">
                <img src="SRC/Gallery/gallery (4).jpg" alt="Gallery05">
                <img src="SRC/Gallery/gallery (6).jpg" alt="Gallery06">
                <img src="SRC/Gallery/gallery (7).jpg" alt="Gallery07">
                <img src="SRC/Gallery/gallery (8).jpg" alt="Gallery08">
                <img src="SRC/Gallery/gallery (3).jpg" alt="Gallery09">
                <img src="SRC/Gallery/gallery (10).jpg" alt="Gallery10">
                <img src="SRC/Gallery/gallery (11).jpg" alt="Gallery11">
                <img src="SRC/Gallery/gallery (12).jpg" alt="Gallery12">
                <img src="SRC/Gallery/gallery (13).jpg" alt="Gallery13">
                <img src="SRC/Gallery/gallery (14).jpg" alt="Gallery14">
                <img src="SRC/Gallery/gallery (1).jpg" alt="Gallery15">
            </div>
        </div>


    </body>

    <footer style="position: fixed; bottom: 0;">
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

            <div class="devider"></div>

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