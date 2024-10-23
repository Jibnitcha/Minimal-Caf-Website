<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Brew</title>
    <link rel="stylesheet" href="HowtoBrew1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <div class="background-container">
        <div class="description">
            <h1><center>How to Brew Your Perfect Cup</center></h1><br>
            <p style="text-align: left;">At our cafe, we believe that great coffee and tea start with the best ingredients. That’s why we source only the finest, freshest beans and tea leaves, ensuring every cup you brew is rich in flavor and full of quality.</p><br>
            <h2>Brewing Coffee</h2>
            <p1 style="text-align: left;"><b>-Brew the perfect drip coffee</b> for a consistently smooth cup<br>
                <b>-Master the French press</b> for a rich, full-bodied flavor    <br>
                <b>-Make espresso at home</b>, whether you like it straight or in a latte.<br><br></p1>
            <p2 style="text-align: left;">We blend old-world techniques with modern innovation, much like the first European coffee houses that became hubs of intellectual exchange and community. At Echo Brew, we aim to recreate that spirit of connection, where every sip of coffee fuels conversation, creativity, and collaboration.</p2>
            <p3 style="text-align: left;">Our story is one of craftsmanship and dedication to the art of brewing. Every cup is a nod to the rich, vibrant history of coffee, from its humble origins to its global journey. When you enjoy a coffee at Echo Brew, you’re not just drinking a beverage—you’re taking part in a tradition that spans centuries and cultures, from the ancient rituals of Ethiopia to the bustling coffee houses of today.</p3>
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