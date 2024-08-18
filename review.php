<?php include 'SRC/check.php';?>
<!DOCTYPE html>

<html>
    <head>
        <title>Customer Reviews</title>
        <!--Fix for CSS and JS files not syncing with PHP properly (Source: StackOverflow)-->
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/review.css?v=<?php echo time();?>">
    </head>

    <body>
    <div class="topshadow"></div>

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


        <div class="reviewbox">
            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro5.jpg">
                    <p>Minsandha Pathirana<p>
                </div>
                <p class="text">
                    I recently booked a boat safari through this website, and I must say it was an incredible experience! 
                    The staff was friendly and knowledgeable, and the boat was comfortable and well-maintained. 
                    We saw a wide variety of wildlife, including dolphins, sea turtles, and even a few whales! 
                    The guides were passionate about conservation and shared fascinating information about the ecosystem. 
                    I highly recommend this boat safari for anyone looking to have an unforgettable wildlife adventure.
                </p>
                <img src="SRC/Ratings/Rating2.png" alt="Rating" class="rating">
                <p class="date">2022-07-12</p>
            </div>

            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro1.jpg">
                    <p>Pasindu Wanigaratne<p>
                </div>
                <p class="text">
                    We had a fantastic time on our boat safari! 
                    The kids were thrilled to spot colorful birds, playful monkeys, and lazy crocodiles along the riverbanks. 
                    The captain and crew were friendly and ensured our safety throughout the trip. 
                    The only reason I am not giving it a full 5 stars is that we did not see as many animals as we had hoped. 
                    Nonetheless, it was a great experience overall, and I would definitely consider booking with this website again in the future.
                </p>
                <img src="SRC/Ratings/Rating1.png" alt="Rating" class="rating">
                <p class="date">2021-02-23</p>
            </div>

            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro4.jpg">
                    <p>Ravindu Kavishka<p>
                </div>
                <p class="text">
                    I had an amazing time on the boat safari! 
                    The landscape was absolutely stunning, with lush greenery and serene waterways. 
                    The guides were incredibly knowledgeable about the local flora and fauna, and they made the trip educational and entertaining. 
                    We spotted numerous exotic birds and even got a glimpse of a rare river otter! 
                    The booking process was straightforward, and the customer service was excellent. 
                    I highly recommend this safari for nature enthusiasts.
               </p>
               <img src="SRC/Ratings/Rating1.png" alt="Rating" class="rating">
                <p class="date">2020-05-11</p>
            </div>

            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro3.jpg">
                    <p>Senali Guruge<p>
                </div>
                <p class="text">
                    We decided to take the sunset boat safari, and it was a truly magical experience. 
                    The calmness of the water, the beautiful hues of the sky, and the silhouettes of trees created a serene atmosphere. 
                    The crew was attentive and made sure we had everything we needed. 
                    While we did not see as much wildlife during this time of the day, the stunning scenery and the relaxing ambiance more than made up for it. 
                    It was a memorable trip that we will cherish for a long time. 
                </p>
                <img src="SRC/Ratings/Rating4.png" alt="Rating" class="rating">
                <p class="date">2022-12-01</p>
            </div>

            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro2.jpg">
                    <p>Aravinda Amartunge<p>
                </div>
                <p class="text">
                    I had high expectations for this boat safari, but unfortunately, it fell short. 
                    We barely saw any wildlife during the entire trip, which was quite disappointing. 
                    The boat itself was comfortable, and the staff was friendly, but the main reason for booking a safari is to witness the beauty of nature up close. 
                    It felt like we spent most of our time just cruising without any real wildlife encounters. 
                    I hope they improve their spotting techniques or provide more accurate information about the likelihood of animal sightings.
                </p>
                <img src="SRC/Ratings/Rating7.png" alt="Rating" class="rating">
                <p class="date">2021-06-04</p>
            </div>

            <div class="review">
                <div class="name">
                    <img src="SRC/Profiles/pro1.jpg">
                    <p>Ashan Vimod<p>
                </div>
                <p class="text">
                I had an incredible experience booking a boat safari through this website. 
                The user-friendly interface made browsing and comparing options easy. 
                Booking was hassle-free, and the confirmation email arrived promptly. 
                The safari itself was breathtaking, with a comfortable boat, friendly crew, and captivating wildlife encounters. 
                The itinerary was well-planned, and the customer service was excellent. Highly recommended for an unforgettable adventure on the water!   
                </p>
                <img src="SRC/Ratings/Rating5.png" alt="Rating" class="rating">
                <p class="date">2021-07-14</p>
            </div>

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