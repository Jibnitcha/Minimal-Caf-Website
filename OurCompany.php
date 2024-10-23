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

       <h1 style="text-align: center; padding-top:80px; padding-bottom: 30px; color:#7A5D3A; font-size: 40px;">Our Company</h1>
       <div class="content-contact-1">
        <img src="company2.jpeg" style="width: 50%;">
            <div class="conpany-1-text">
                <h3>About The Company</h3><br>    
                <p>Coffee space&friends is a modern caf&eacute; inspired by the minimalist aesthetics of Korean coffee culture. Our space offers a serene environment with clean lines, natural materials, and a focus on simplicity and elegance. We cater to customers who appreciate a peaceful atmosphere where they can enjoy premium coffee and freshly prepared treats.</p>
            </div>
        </div>
        <br>

        <div class="background" style="background-color:#EEEBE4;">
        <div class="content-contact-2" >
                <div class="conpany-2-text">
                    <h3>Vision</h3><br>    
                    <p>To be a leading caf&eacute; in the community, known for its minimalist design, exceptional service, and commitment to sustainability.</p>
                    <br><br>
                    <h3>Business Concept</h3>
                    <br>
                    <p>Our caf&eacute; emphasizes minimalism, both in design and menu. The interior features a mix of white walls, light wood, and natural light, creating a calming ambiance. The menu is carefully curated to include a selection of specialty coffees, teas, and a limited array of artisanal pastries, ensuring high quality in every offering.</p>
                </div>
            <img src="company5.jpeg" style="width: 50%; height: 500px;">
        </div>
        </div>
        <br>
        <br>
        <br>

      <!-- Footer  -->
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