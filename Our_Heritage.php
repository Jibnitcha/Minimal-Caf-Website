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
       <div class="conpany-1-text">
            <h3 style="text-align: center; font-size:50px; padding-bottom:40px;">Our Heritage</h3><br>    
        </div>
       <div class="background" style="background-color:#EEEBE4;">
        <div class="content-contact-2" >
                <div class="conpany-2-text">
                    <h3>Vision</h3><br>    
                    <p>At Coffee space&friends, we believe that every cup of coffee tells a story steeped in tradition, passion, and craftsmanship.
                    Our journey began 2013 years ago, with a simple dream: to create a place where people could gather, enjoy exceptional coffee, and connect with one another.</p>
                    <br><br>
                    <br>
                    <p>From the very beginning, we have been committed to sourcing only the finest, ethically-grown beans from sustainable farms across the globe. Every batch is hand-selected and roasted to perfection, preserving the unique flavors of each origin.
                    Our artisanal brewing methods, passed down through generations, honor the time-honored traditions of coffee-making, ensuring that every sip delivers a rich and authentic experience.</p>
                    <br><br>
                    <p>But Coffee space&friends is more than just a caf&eacute; it's a community. Rooted in our deep love for coffee, weâ€™ve created a space where stories unfold, friendships are nurtured, and ideas are shared.
                    Our heritage is one of passion, connection, and quality, and we are proud to continue this legacy with every cup we serve.</p>
                </div>
            <img src="company4.jpeg" style="width: 50%;">
        </div>
        </div>


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