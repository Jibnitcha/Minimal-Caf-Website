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
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="nav__link">HOME</a>
                </li>
                <li class="nav__item">
                    <a href="ProjectSove1.php" class="nav__link">MENU</a>
                </li>
                <li class="nav__item">
                    <a href="Coffee_Mug/Merchandise.php" class="nav__link">MERCHANDISE</a>
                </li>
                <li class="nav__item">
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
    
    <div class="auto-slideshow">
        <div class="slider">
        <div class="slider-img">   
                <img src="c3.jpeg"  alt="coffee">
        </div>
        </div>
    
        <div class="slider">
        <div class="slider-img">
            <img src="c4.jpg">
        </div>
        </div>

        <div class="slider">
        <div class="slider-img">
            <img src="c5.jpg">
        </div>
        </div>
    </div>

   
     <!-- brifely about cafe -->
     <div class="wrapper">
        <h2>Coffee space&friends</h2>
            <p>"Less is more" in every corner and cup at our cafe join us for the perfect pause.<br><br></p>
            <h4>&#128343;Open daily<br>09:00 - 22:00</h4>
            <br><br>
            <p>Good days start with good coffee</p>
     </div>


     <div class="message2">
        <h2>~ TAKE A SIP AND START BELIEVING ~</h2><br><br>
        <div class="message2-content">
            <p>Before you sit down for an afternoon with<br>your latop filled with unclosed tabs</p>
        </div>
     </div>
     <br><br>

    <!-- Poster Picture -->
    <div class="Poster-grid">
        <img class="Poster-grid-col-2 Poster-grid-row-2 " src="p1.jpeg">
        <img src="drink2.jpg">
        <img src="drink7.jpeg">
        <img src="rewrd3.jpeg">
        <img src="drink5.jpeg">
    </div>
    <br>
    
    <div class="bo">
        <h2 style="text-align: center; padding-top: 90px; color: #5C4330; font-size: 35px;">Our Delicious Offerings</h2> 
    <div class="pic-item"> 
        <div class="card-item">
            <a href="Coffee.php">
            <img src="icon5.jpeg" style="width: 50%;"></a>
            <p>Coffee</p>
            <p>Perfectly brewed to bring out the unique flavors of each bean.</p>
        </div>

        <div class="card-item">
            <a href="Cake.php">
            <img src="icon6.jpeg" style="width: 50%;"></a>
            <p>Dessert</p>
            <p>A perfect balance of traditional and modern flavors</p>
        </div>

        <div class="card-item">
            <a href="Begery.php">
            <img src="icon7.jpeg" style="width: 50%;"></a>
            <p>Bakery</p>
            <p>Delightful crunch and melt-in-your-mouth softness.</p>
        </div>

        <div class="card-item">
            <a href="Coffee_Mug/Merchandise.php">
            <img src="icon8.jpeg" style="width: 50%;"></a>
            <p>Coffee Mean</p>
            <p>Each batch of beans is rich, aromatic, and full of character.</p>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>

    <!-- 2nd Poster -->
    <div class="Poster-2">
        <h2>Recommended Menu</h2>
        <p>COZY GOODNESS BEVERAGE</p>
        <div class="Poster-2-pic">
        <img src="p3.jpeg" style="width: 50%;">
        <img src="p4.jpeg" style="width: 50%;">
        <img src="p6.jpeg" style="width: 50%;">
        </div>
        <br>
        <br>
        <p>SUGARE DREAMS CAKE</p>
        <div class="Poster-2-pic">
        <img src="c1.jpeg" style="width: 50%;">
        <img src="ca2.jpeg" style="width: 50%;">
        <img src="ca3.jpeg" style="width: 50%;">
        </div>
    </div>

    <!-- Bottom bar -->
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