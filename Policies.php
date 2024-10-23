<?php
    session_start();
?>
<html>
    <head>
        <title> Policies </title>
        <link rel="stylesheet" href="stylecoffee1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script defer src="script.js"></script>
    </head>
    <body>
    
    <div class="top-bar">
       <div class="top-bar-content">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="Homepagecofffee.php" class="nav__link">HOME</a>
                    </li>
                    <li class="nav_item">
                        <a href="newMenu/MenuPageMix.html" class="nav__link">MENU</a>
                    </li>
                    <li class="nav_item">
                        <a href="Coffee_Mug/Merchandise.php" class="nav__link">MECHANDISE</a>
                    </li>
                    <li class="nav_item">
                        <a href="Rewardspagecoffee.php" class="nav__link">MEMBERSHIP REWARDS</a>
                    </li>
                    
                </ul>

                <ul class="nav__list2">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav__item">
                            <p style="color:#281F19; font-weight:600; font-size:large">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?><p>
                        </li>
                        <li class="nav__item">
                            <a href="logout.php" class="btn">LOGOUT</a>
                        </li>
                    <?php else: ?>
                        <li class="nav__item">
                            <a href="Registerpage.php" class="btn">JOIN NOW</a>
                        </li>
                        <li class="nav__item">
                            <a href="Loginpagecoffee.php" class="btn">LOGIN</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>     
       </div> 

       <div class="content-contact" style="  color:#281F19;">
        <div class="container-policies">
            <h1>Onlines Policies</h1><br>
            <h2>Coffee space & friends Online Policies</h2>
            <h3>Welcome to Coffee space & friends's online store. By accessing or using our website, you agree to be bound by the following policies. Please review them carefully before making any purchases.</h3>
            <hr>
            <br>
            <h2>1.Privacy Policy</h2>
            <h3>Your privacy is important to us. Any personal information you provide when using our website will be used solely for processing your orders and improving your online experience. We will not share, sell, or distribute your information to third parties without your consent, except as required by law.<br><br><br>
            Data Collection: We collect your name, email, shipping address, and payment information when you place an order.<br><br><br>
            Security: We implement strict security measures to protect your personal data, including encryption and secure payment gateways.,<br><br><br>
            Cookies: Our site uses cookies to enhance user experience. You can manage your cookie preferences in your browser settings.</h3>
            <hr>
            <br>
            <h2>2.Cancellation Policy</h2>
            <h3>Order Cancellations: Orders can be canceled within 1 hour of placing them. After this time, cancellations may not be possible due to our processing schedules.<br><br>
            </h3><h3>How to Cancel: Contact us immediately at [customer support number/email] with your order number.</h3>
            <hr>
            <br>
            <h2>3.Terms of Use</h2>
            <h3>By using our website, you agree to abide by the following terms:</h3>
            <h3>Intellectual Property: All content on this site, including images, text, and branding, is the property of [Café Name] and cannot be used without prior permission.<br><br><br>
                Third-Party Links: Our website may contain links to third-party websites. We are not responsible for the content or policies of those websites.</h3>
            <hr>
        </div>
        </div>
        <br>


        <div class="footer-container">
       <div class="footer" >
        <div class="footer-heading footer-1">
            <h2>ABOUT US</h2>
            <a href="Contactuspage.php">Our Contact</a>
            <a href="OurCompany.php">Our Company</a>
            <a href="Our_Heritage.php">Our Heritage</a>
            <a href="Promotion.php">News and Promotion</a>
            <a href="Policies.php">Online Policies</a>
        </div>

        <div class="footer-heading footer-2">
            <h2>COFFEE & TEA AT HOME</h2>
            <a href="CoffeeStory.php">Coffee Story</a>
            <a href="Tea&Milk.php">Coffee and tea</a>
            <a href="HowToBrew.php">How to Brew</a>
            <a href="Rewardspagecoffee.php">MEMBERSHIP&reg;REWARDS</a>
            <a href="Promotion.php">PROMOTION</a>
        </div>    

        <div class="footer-heading footer-3">
            <h2>MENU</h2>
            <a href="Coffee.php">BEAVERAGE</a>
            <a href="Soup%20&%20Pasta.php">FOOD</a>
            <a href="IceCream.php">DESSERT</a>
            <a href="Vegetarian.php">VEGETARIAN </a>
        </div>
        <div class="footer-bottom">
        </div>
       </div>
    </div>
    </body>
</html>