<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Booking Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/booking.css?v=<?php echo time();?>">
    </head>

    <body onload="termsCheck()">
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

        <form method="post" action="SRC/bookingdetails.php">

            <p class="formmain">Select Safari Route</p>
            <div class="formitems">

                <label class="routeitem">
                    <p class="routenum">Route 01</p>
                    <img src="SRC/Maps/map1.png" alt="Map01">
                    <p class="routedesc">
                        Travel Time : 30 Minutes<br>
                        Length : 2 KM
                    </p>
                    <input type="radio" name="rnumber" value="RT01" required>
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 02</p>
                    <img src="SRC/Maps/map2.png" alt="Map02"><p class="routedesc">
                        Travel Time : 60 Minutes<br>
                        Length : 4 KM
                    </p>
                    <input type="radio" name="rnumber" value="RT02" required>
                    
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 03</p>
                    <img src="SRC/Maps/map3.png" alt="Map03">
                    <p class="routedesc">
                        Travel Time : 90 Minutes<br>
                        Length : 6 KM
                    </p>
                    <input type="radio" name="rnumber" value="RT03" required>
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 04</p>
                    <img src="SRC/Maps/map4.png" alt="Map04">
                    <p class="routedesc">
                        Travel Time : 160 Minutes<br>
                        Length : 12 KM
                    </p>
                    <input type="radio" name="rnumber" value="RT04" required>
                </label>

            </div>

            <p class="formmain">Select Boat Type</p>
            <div class="formitems">

                <label class="boattypes">
                    <img src="SRC/Boats/type1.png" alt="Boat01">
                    <p class="routenum">Boat 01</p>
                    <input type="radio" name="bnumber" value="BT01" required>
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type2.png" alt="Boat02">
                    <p class="routenum">Boat 02</p>
                    <input type="radio" name="bnumber" value="BT02" required>
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type3.png" alt="Boat03">
                    <p class="routenum">Boat 03</p>
                    <input type="radio" name="bnumber" value="BT03" required>
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type4.png" alt="Boat04">
                    <p class="routenum">Boat 04</p>
                    <input type="radio" name="bnumber" value="BT04" required>
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type5.png" alt="Boat05">
                    <p class="routenum">Boat 05</p>
                    <input type="radio" name="bnumber" value="BT05" required>
                </label>

            </div>

            <p class="formmain">Select Time Slot</p>
            <div class="formitems">

                <label class="timeslot">
                    <p>08:00 A.M.</p>
                    <input type="radio" name="time" value="08_AM" required>
                </label>
                <label class="timeslot">
                    <p>10:00 A.M.</p>
                    <input type="radio" name="time" value="10_AM" required>
                </label>
                <label class="timeslot">
                    <p>12:00 P.M.</p>
                    <input type="radio" name="time" value="12_PM" required>
                </label>
                <label class="timeslot">
                    <p>02:00 P.M.</p>
                    <input type="radio" name="time" value="02_PM" required>
                </label>
                <label class="timeslot">
                    <p>04:00 P.M.</p>
                    <input type="radio" name="time" value="04_PM" required>
                </label>
                <label class="timeslot">
                    <p>06:00 P.M.</p>
                    <input type="radio" name="time" value="06_PM" required>
                </label>
                

            </div>

            <p class="formmain">Enter Seat Count</p>
            <div class="formitems">
                <label class="seatcount">
                    <input type="number" name="scount" placeholder="Max Seat Count : 20" min="0" max="20"  required>
                </label>
            </div>

            <p class="formmain">Select a Date</p>
            <div class="formitems">
                <label class="enterdate">
                    <input type="date" name="date" min='2023-05-13' max='2023-12-31'  required>
                </label>
                <button>View Schedule</button>
            </div>

            <label class="terms"><input type="checkbox" name="terms" value="tCheck" onclick="termsCheck()">  Accept Terms & Conditions</label>

            <div class="buttonset">
                <button type="button" id="calc">Calculate Price</button>
                <button type="button" class="disc">Get Discounts</button>
            </div>
            <script src="booking.js?v=<?php echo time();?>"></script>

            <p id="price"></p>
            
           <button type="submit" id="submitbutton">Pay & Book</button>

        </form>
    </body>

    <footer>
        <div class="topfooter">

            <div class="bottomnavbar">
            <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
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