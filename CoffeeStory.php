<?php
    session_start();
?>
<html>
    <head>
        <title> Home1 </title>
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
                        <a href="ProjectSove1.php" class="nav__link">MENU</a>
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

        <div class="cardmember">
            <img src="o4.jpeg" style="width: 100%;">
            <img src="o2.jpeg" style="width: 100%;">
            <img src="o5.jpeg" style="width: 100%;">
        </div>

       <div class="content-contact">
        <img src="story1.jpeg" style="width: 50%;">
            <div class="contact-1-text">
                <h3>Coffee Story</h3><br>    
                <p>At Echo Brew, our coffee story begins with a passion for sourcing and crafting coffee that tells a story in every cup. Inspired by centuries of tradition, we trace our roots back to the highlands of Ethiopia, where the legend of Kaldi and his energized goats first sparked the idea of coffee. Like Kaldi, we believe that coffee has a unique energy and spirit, capable of bringing people together in meaningful ways.
                   </p>
            </div>
        </div>
        <p></p>
        <br>

        <!-- <div class="content-contact2">
            <img src="p2.jpeg" style="width: 50%;">
                <div class="contact-2-text">
                    <h3>Contact Us</h3><br>    
                    <p>Location:South Korea, Seoul, Mapo-gu, Seongmisan-ro, 172 2<br>
                       Open Daily: 9:00 a.m. - 22:00 p.m. <br>
                       Tele Phone: 937-773-2763 <br>
                       Gmail: coffee_space_and_friends@gmail.com <br>
                       </p>
                </div>
            </div> -->
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