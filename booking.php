<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Booking Page</title>
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/booking.css?v=<?php echo time();?>">
        <script src="booking.js"></script>
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

        <form method="get">

            <p class="formmain">Select Safari Route</p>
            <div class="formitems">

                <label class="routeitem">
                    <p class="routenum">Route 01</p>
                    <img src="SRC/Maps/map1.png" alt="Map01">
                    <p class="routedesc">
                        Travel Time : 30 Minutes<br>
                        Length : 2 KM
                    </p>
                    <input type="radio" name="rnumber" value="01">
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 02</p>
                    <img src="SRC/Maps/map2.png" alt="Map02"><p class="routedesc">
                        Travel Time : 60 Minutes<br>
                        Length : 4 KM
                    </p>
                    <input type="radio" name="rnumber" value="02">
                    
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 03</p>
                    <img src="SRC/Maps/map3.png" alt="Map03">
                    <p class="routedesc">
                        Travel Time : 90 Minutes<br>
                        Length : 6 KM
                    </p>
                    <input type="radio" name="rnumber" value="03">
                </label>

                <label class="routeitem">
                    <p class="routenum">Route 04</p>
                    <img src="SRC/Maps/map4.png" alt="Map04">
                    <p class="routedesc">
                        Travel Time : 160 Minutes<br>
                        Length : 12 KM
                    </p>
                    <input type="radio" name="rnumber" value="04">
                </label>

            </div>

            <p class="formmain">Select Safari Route</p>
            <div class="formitems">

                <label class="boattypes">
                    <img src="SRC/Boats/type1.png" alt="Boat01">
                    <p class="routenum">Boat 01</p>
                    <input type="radio" name="bnumber" value="01">
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type2.png" alt="Boat02">
                    <p class="routenum">Boat 02</p>
                    <input type="radio" name="bnumber" value="02">
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type3.png" alt="Boat03">
                    <p class="routenum">Boat 03</p>
                    <input type="radio" name="bnumber" value="03">
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type4.png" alt="Boat04">
                    <p class="routenum">Boat 04</p>
                    <input type="radio" name="bnumber" value="04">
                </label>

                <label class="boattypes">
                    <img src="SRC/Boats/type5.png" alt="Boat05">
                    <p class="routenum">Boat 05</p>
                    <input type="radio" name="bnumber" value="05">
                </label>

            </div>

            <p class="formmain">Select Time Slot</p>
            <div class="formitems">

                <label class="timeslot">
                    <p>08:00 A.M.</p>
                    <input type="radio" name="tnumber" value="08_AM">
                </label>
                <label class="timeslot">
                    <p>10:00 A.M.</p>
                    <input type="radio" name="tnumber" value="10_AM">
                </label>
                <label class="timeslot">
                    <p>12:00 P.M.</p>
                    <input type="radio" name="tnumber" value="12_PM">
                </label>
                <label class="timeslot">
                    <p>02:00 P.M.</p>
                    <input type="radio" name="tnumber" value="02_PM">
                </label>
                <label class="timeslot">
                    <p>04:00 P.M.</p>
                    <input type="radio" name="tnumber" value="04_PM">
                </label>
                <label class="timeslot">
                    <p>06:00 P.M.</p>
                    <input type="radio" name="tnumber" value="06_PM">
                </label>
                

            </div>

            <p class="formmain">Enter Seat Count</p>
            <label class="seatcount">
                <input type="number" id="scount" name="scount" placeholder="Max Seat Count : 20" min="0" max="20">
            </label>

            <p class="formmain">Select a Date</p>
            <div class="formitems">
                <label class="enterdate">
                    <input type="date" min='2023-05-13' max='2023-12-31'>
                </label>
                <button>View Schedule</button>
            </div>

            <label class="terms"><input type="checkbox">  Accept Terms & Conditions</label>

            <div class="buttonset">
                <button type="button" class="calc" onclick="calcPrice();">Calculate Price</button>
                <button type="button" class="disc">Get Discounts</button>
            </div>

            <p id="price"></p>
            
           <button type="submit" class="submitbutton">Pay & Book</button>

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