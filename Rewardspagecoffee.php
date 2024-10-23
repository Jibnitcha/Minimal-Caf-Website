<?php
    session_start();
?>
<html>
    <head>
        <title> Rewards page </title>
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
                             <a href="Coffee_Mug/Merchandise.php" class="nav__link">MERCHANDISE</a>
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

<!-- small banner for starbuck rewards -->
         <div class="top-banner">
            <p>MEMBERSHIP&reg; REWARDS</p>
         </div>
         <div class="cardmember">
            <img src="rewrd3.jpeg" style="width: 100%;">
            <img src="reward1.jpeg" style="width: 100%;">
            <img src="reward2.jpeg" style="width: 100%;">
        </div>

         <div class="Rewards-part1">
         <div class="rewards-content1">
            <h2>Getting started is easy</h2>
            <p>Earn Stars and get rewarded in a few easy steps.</p>  
        </div>
        <div class="rewards-content2">
        <div class="Card-rewards">
            <img src="icon1.jpeg" style="width: 50%;">
            <div class="description-reward">
                <h3>Create an account</h3>
                <p>To get started, join now. You can also join in the app<br>
                    to get access to the full range of MEMBERSHIP&reg; Rewards<br>
                    benefits.</p>
            </div>        
        </div>

        <div class="Card-rewards">
            <img src="icon22.jpeg" style="width: 50%;">
            <div class="description-reward">
                <h3>Collect Stars for every 25B, collect 1 Stars</h3>
                <p>Use our mobile app to order ahead and pay, to order at your table<br>
                   and a barista will bring it you, to order MEMBERSHIP&reg; delivery 
                   or to track <br>the Stars and Rewards you've earned</p>
            </div>        
        </div>
        
        <div class="Card-rewards">
            <img src="icon3.jpeg" style="width: 50%;">
            <div class="description-reward">
                <h3>Get the best of MEMBERSHIP&reg; Rewards                </h3>
                <p>To get started, join now. You can also join in the app<br>
                    to get access to the full range of MEMBERSHIP&reg; Rewards<br>
                    benefits.</p>
            </div>        
        </div>
        </div>
        </div>


<!-- more benefits -->
         <div class="bar-rewards">
            <h2>More benefits right from the start</h2>
            <ul class="stars-levels">
                <li class="stars-levels-items">
                    <a href="#content-id-1">20 &starf;</a>
                </li>
                <li class="stars-levels-items">
                    <a href="#content-id-2">60 &starf;</a>
                </li>
                <li class="stars-levels-items">
                    <a href="#content-id-3">120 &starf;</a>
                </li>
                <li class="stars-levels-items">
                    <a href="#content-id-4">160 &starf;</a>
                </li>
                <li class="stars-levels-items">
                    <a href="#content-id-5">200 &starf;</a>
                </li>
            </ul>
         </div>

         <div class="content-reward" id="content-id-1">
            <div class="content-1">
                <img src="braed1.jpeg" style="width: 50%;">
                <div class="content-1-text">
                    <h3>20&starf;&emsp;Classic Bagel</h3>
                    <p>Bagel with cream cheese and smoked salmon recipe</p>
                </div>
            </div>
         </div>

         <div class="content-reward" id="content-id-2">
            <div class="content-1">
                <img src="bread2.jpeg" style="width: 50%;">
                <div class="content-1-text">
                    <h3>60&starf;&emsp;Sunrise Bombo</h3>    
                    <p>Americano with Raspberry pleasure croissant</p>
                </div>
            </div>
         </div>

         <div class="content-reward" id="content-id-3">
            <div class="content-1">
                <img src="bread3.jpeg" style="width: 50%;">
                <div class="content-1-text">
                    <h3>120&starf;&emsp;Specialty Food</h3>    
                    <p>Set with toast topped with butter, an iced latte,<br>
                       a glass of cold milk, chocolate cubes, and a side of biscuits</p>
                </div>
            </div>
         </div>

         <div class="content-reward" id="content-id-4">
            <div class="content-1" >
                <img src="braed6.jpeg" style="width: 50%;">
                <div class="content-1-text">
                    <h3>160&starf;&emsp;Cooking Class</h3>    
                    <p>Fluffy lchigo Souffle Pancake on top with strawberry </p>
                </div>
            </div>
         </div>

         <div class="content-reward" id="content-id-5">
            <div class="content-1" >
                <img src="bread4.jpeg" style="width: 50%;">
                <div class="content-1-text">
                    <h3>200&starf;&emsp;Booking seat</h3>    
                    <p>Reserving a cozy seat in a private room with plush comfort.</p>
                </div>
            </div>
         </div>
         <div class="bar-rewards">
         </div>


         <!-- bottom bar -->

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