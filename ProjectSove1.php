<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ProjectSolve1.css">    
<body>
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
       <div class="top-banner">
            <p>MENU&reg;</p>
    </div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// slide0 -->
<div class="slideshow-container0">

  <!-- Slideshow content -->
  <div class="slides0" id="slideContainer0">
    <div class="slide0">
      <img src="Slide1.png" style="width:100%">
      <div class="text0" hef = ""></div>
    </div>
    <div class="slide0">
      <img src="Slide2.png" style="width:100%">
      <div class="text0"></div>
    </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev0" onclick="moveSlide0(-1)">&#10094;</a>
  <a class="next0" onclick="moveSlide0(1)">&#10095;</a>

  <!-- The dots/circles -->
  <div class="dots-container0">
    <span class="dot0" onclick="currentSlide0(1)"></span> 
    <span class="dot0" onclick="currentSlide0(2)"></span> 
  </div>

</div>

<div class="sidenav">


  <button class="dropdown-btn"><b>Beverages</b>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Tea&Milk.php">Tea & Milk</a>
    <a href="Coffee.php">Coffee</a>
    <a href="Soda&Smoothie.php">Soda & Smoothie</a>
  </div>

  <hr style="height:1px; width: 90%; background-color: #7A5D3A;">

  <button class="dropdown-btn"><b>Food</b>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Begery.php">Begery</a>
    <a href="Soup%20&%20Pasta.php">Soup & Pastar</a>
    <a href="Salad&Yougurt.php">Salad & Yogurt</a>
  </div>

  <hr style="height:1px; width: 90%; background-color: #7A5D3A;">

  <button class="dropdown-btn"><b>Dessert</b>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="IceCream.php">Ice cream</a>
    <a href="Cake.php">Cake</a>
    <a href="Tart.php">Tart</a>
  </div>

  <hr style="height:1px; width: 90%; background-color: #7A5D3A;">
<a href="Vegetarian.php"><b>Vegetarion Menu</b></a>
  
</div>


<div class="search-container">
  <input type="text" id="searchInput" placeholder="Search menu">
  <button type="submit" id="searchButton">
      <img src="SearchIcon.png" alt="Search" width="20" height="20" >
  </button>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////slide1 -->
<div class="main">
<h1 style="color: #281F19;"><b>Beverage</b></h1>
  <hr style="height:2px; border-width:10; background-color: #7A5D3A;">
<h2 style="color: #281F19; font-size: 20px;"><b>Tea & Milk</b></h2>
 
<div class="slideshow-container1" id="slideshowContainer1">
  <!-- Slideshow content -->
  <div class="slides1" id="slideContainer1">
      <div class="slide1">
          <div class="slide-item1" data-caption="Lime Tea">
            <a href="TeaLimeTea.php">
              <img src="lime tea.png" alt="Lime Tea" class="slide-image1">
              <div class="caption">Lime Tea</div></a>
          </div>
          <div class="slide-item1" data-caption="Green tea">
            <a href="TeaGreenTea.php">
              <img src="Green tea.png" alt="Green tea" class="slide-image1">
              <div class="caption">Green tea</div></a>
          </div>
          <div class="slide-item1" data-caption="Thai Milk Tea">
            <a href="TeaThaiMilkTea.php">
              <img src="Thai milk tea.png" alt="Thai Milk Tea" class="slide-image1">
              <div class="caption">Thai Milk Tea</div></a>
          </div>
      </div>
      <div class="slide1">
          <div class="slide-item1" data-caption="Caramel Milk">
            <a href="MilkCalamelMilk.php">
              <img src="Caramel milk.png" alt="Forest Pathway" class="slide-image1">
              <div class="caption">Caramel Milk</div></a>
          </div>
          <div class="slide-item1" data-caption="Cocoa Milk">
            <a href="MilkCocaoMilk.php">
              <img src="Cocoa milk.png" alt="Desert Dunes" class="slide-image1">
              <div class="caption">Cocoa Milk</div></a>
          </div>
          <div class="slide-item1" data-caption="Kokuto Milk">
            <a href="MilkKokutoMilk.php">
              <img src="Kokuto milk.png" alt="Kokuto Milk" class="slide-image1">
              <div class="caption">Kokuto Milk</div></a>
          </div>
      </div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev1" onclick="moveSlide1(-1)">&#10094;</a>
  <a class="next1" onclick="moveSlide1(1)">&#10095;</a>
</div>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////slide2 -->
<h3 style="color: #281F19; font-size: 20px;"><b>Coffee</b></h3>
<div class="slideshow-container2" id="slideshowContainer2">
    <!-- Slideshow content -->
    <div class="slides2" id="slideContainer2">
        <div class="slide2">
            <div class="slide-item2" data-caption="Americano">
                <a href="CoffeeAmericano.php">
                <img src="Americano.png" alt="Americano" class="slide-image2">
                <div class="caption2">Americano</div></a>
            </div>
            <div class="slide-item2" data-caption="Menu8">
                <a href="CoffeeCapucino.php">
                <img src="Capucino.png" alt="Menu8" class="slide-image2">
                <div class="caption2">Capucino</div></a>
            </div>
            <div class="slide-item2" data-caption="Espresso">
                <a href="CoffeeEspresso.php">
                <img src="Espresso.png" alt="Espresso" class="slide-image2">
                <div class="caption2">Espresso</div></a>
            </div>
        </div>
        <div class="slide2">
            <div class="slide-item2" data-caption="Kokuto Latte">
                <a href="CoffeeKokutoLate.php">
                <img src="Kokuto latte.png" alt="Kokuto Latte" class="slide-image2">
                <div class="caption2">Kokuto Latte</div></a>
            </div>
            <div class="slide-item2" data-caption="Latte">
                <a href="CoffeeLette.php">
                <img src="latte.png" alt="Latte" class="slide-image2">
                <div class="caption2">Latte</div></a>
            </div>
            <div class="slide-item2" data-caption="Mocha">
                <a href="CoffeeMokha.php">
                <img src="Mocha.png" alt="Mocha" class="slide-image2">
                <div class="caption2">Mocha</div></a>
            </div>
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev2" onclick="moveSlide2(-1)">&#10094;</a>
    <a class="next2" onclick="moveSlide2(1)">&#10095;</a>
</div>
<!-- ////////////////////////////////////////////////////////slide3/////////////////////////////////////////////////////////// -->
<h4 style="color: #281F19; font-size: 20px;"><b>Smoothie & Soda</b></h4>
<div class="slideshow-container3" id="slideshowContainer3">
    <!-- Slideshow content -->
    <div class="slides3" id="slideContainer3">
        <div class="slide3">
            <div class="slide-item3" data-caption="Watermelon Smoothie">
                <a href="Smoothiewatermelon.php">
                <img src="watermelon smoothie.png" alt="Watermelon Smoothie" class="slide-image3">
                <div class="caption3">Watermelon Smoothie</div></a>
            </div>
            <div class="slide-item3" data-caption="Mixberry Smoothie">
                <a href="SmoothieMixberry.php">
                <img src="Mix berries smoothie.png" alt="Mixberry Smoothie" class="slide-image3">
                <div class="caption3">Mixberry Smoothie</div></a>
            </div>
            <div class="slide-item3" data-caption="Strawberry Smoothie">
                <a href="SmoothieStrawberry.php">
                <img src="Strawberry smoothei.png" alt="Strawberry Smoothie" class="slide-image3">
                <div class="caption3">Strawberry Smoothie</div></a>
            </div>
        </div>
        <div class="slide3">
            
            <div class="slide-item3" data-caption="Ice Lemon Sada">
                <a href="SodaIceLemonSoda.php">
                <img src="Ice lemon soda.png" alt="Ice Lemon Sada" class="slide-image3">
                <div class="caption3">Ice Lemon Sada</div></a>
            </div>
            <div class="slide-item3" data-caption="Strawberry Soda">
                <a href="SodaStrawberrySoda.php">
                <img src="Strawberry soda.png" alt="Strawberry Soda" class="slide-image3">
                <div class="caption3">Strawberry Soda</div></a>
            </div>
            <div class="slide-item3" data-caption="Ume Soda">
                <a href="SodaUmeSoda.php">
                <img src="Ume soda.png" alt="Ume Soda" class="slide-image3">
                <div class="caption3">Ume Soda</div></a>
            </div>
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev3" onclick="moveSlide3(-1)">&#10094;</a>
    <a class="next3" onclick="moveSlide3(1)">&#10095;</a>
</div>
<br>
<br>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////slide4 -->
<h5 style="color: #281F19; font-size: 30px; line-height: 1px;"><b>Food</b></h5><br>
  <hr style="height:2px; border-width:10; background-color: #7A5D3A;line-height: 1px;"><br>
<h6 style="color: #281F19; font-size: 20px; line-height: 1px;"><b>Soup & Pastar</b></h6><br>

<div class="slideshow-container4"  id="slideshowContainer4" style="line-height: 1px;" >
    
    <div class="slides4" id="slideContainer4" >
        <div class="slide4">
            <div class="slide-item4" data-caption="Cron Soup">
                <a href="SoupCorn.php">
                <img src="corn soup.png" alt="Cron Soup" class="slide-image4">
                <div class="caption4">Cron Soup</div></a>
            </div>
            <div class="slide-item4" data-caption="Creamy Mushroom Soup">
                <a href="SoupCreamyMushroom.php">
                <img src="creamy mushroom soup.png" alt="Creamy Mushroom Soup" class="slide-image4">
                <div class="caption4">Creamy Mushroom Soup</div></a>
            </div>
            <div class="slide-item4" data-caption="Penne All Arrabbiata pasta">
                <a href="PastaPenne%20All%e2%80%99%20Arrabbiata%20pasta.php">
                <img src="Penne All’ Arrabbiata pasta.png" alt="Penne All Arrabbiata pasta" class="slide-image4">
                <div class="caption4">Penne All Arrabbiata pasta</div></a>
            </div>
        </div>
        <div class="slide4">
            <div class="slide-item4" data-caption="Penne All Arrabbiata with Smoked Sausage pasta">
                <a href="PastaPenne%20All%e2%80%99%20Arrabbiata%20with%20Smoked%20Sausage%20pasta.php">
                <img src="Penne All’ Arrabbiata with Smoked Sausage pasta.png" alt="Penne All Arrabbiata with Smoked Sausage pasta" class="slide-image4">
                <div class="caption4">Penne All Arrabbiata with Smoked Sausage pasta</div></a>
            </div>
            <div class="slide-item4" data-caption="Fusilli Bolognese pasta">
                <a href="PastaFusilli%20Bolognese%20pasta.php">
                <img src="Fusilli Bolognese pasta.png" alt="Fusilli Bolognese pasta" class="slide-image4">
                <div class="caption4">Fusilli Bolognese pasta</div></a>
            </div>
            <div class="slide-item4" data-caption="Bacon Pasta">
                <a href="BaconPasta.php">
                <img src="Bacon Pasta.png" alt="Bacon Pasta" class="slide-image4">
                <div class="caption4">Bacon Pasta</div></a>
            </div>
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev4" onclick="moveSlide4(-1)">&#10094;</a>
    <a class="next4" onclick="moveSlide4(1)">&#10095;</a>
</div>
<!-- ////////////////////////////////////////////////////////slide5/////////////////////////////////////////////////////////// -->
<h7 style="color: #281F19; font-size: 20px;"><b>Bakery</b></h7>
<div class="slideshow-container5" id="slideshowContainer5">
    
    <div class="slides5" id="slideContainer5">
        <div class="slide5">
            <div class="slide-item5" data-caption="French butter croissant">
                <a href="BegeryFrenchButterCroissant.php">
                <img src="French butter croissant.png" alt="French butter croissant" class="slide-image5">
                <div class="caption5">French butter croissant</div></a>
            </div>
            <div class="slide-item5" data-caption="Almond cream croissant ">
                <a href="BegeryAlmondCreamCroissant.php">
                <img src="Almond cream croissant.png" alt="Almond cream croissant " class="slide-image5">
                <div class="caption5">Almond cream croissant </div></a>
            </div>
            <div class="slide-item5" data-caption="Banana chocolate-ship ">
                <a href="BegeryBananaChocChipMuffin.php">
                <img src="Banana chocolate-ship.png" alt="Banana chocolate-ship " class="slide-image5">
                <div class="caption5">Banana chocolate chip Muffin </div></a>
            </div>
        </div>
        <div class="slide5">
            <div class="slide-item5" data-caption="skinny blueberry muffin">
                <a href="BegerySkinnyBlueberrMuffin.php">
                <img src="skinny blueberry muffin.png" alt="skinny blueberry muffin" class="slide-image5">
                <div class="caption5">Skinny blueberry muffin</div></a>
            </div>
            <div class="slide-item5" data-caption="Chocolate chip cookie ">
                <a href="ChimichurriSauce.php">
                <img src="Chocolate chip cookie.png" alt="Chocolate chip cookie " class="slide-image5">
                <div class="caption5">Chocolate chip cookie </div></a>
            </div>
            <div class="slide-item5" data-caption="Custard cream mochi waffle ">
                <a href="hBegeryCustardCreamMochiWaffle.php">
                <img src="Custard cream mochi waffle.png" alt="Custard cream mochi waffle " class="slide-image5">
                <div class="caption5">Custard cream mochi waffle </div></a>
            </div>
        </div>
    </div>
    <!-- Next and previous buttons -->
    <a class="prev5" onclick="moveSlide5(-1)">&#10094;</a>
    <a class="next5" onclick="moveSlide5(1)">&#10095;</a>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////slide6 -->
<h8 style="color: #281F19; font-size: 20px;"><b>Salad & Yogurt</b></h8>
<div class="slideshow-container6" id="slideshowContainer6">
    
    <div class="slides6" id="slideContainer6">
        <div class="slide6">
            <div class="slide-item6" data-caption="Altipasto Salad">
                <a href="SaladAntipasto.php">
                <img src="antipasto salad.png" alt="Altipasto Salad" class="slide-image6">
                <div class="caption6">Altipasto Salad</div></a>
            </div>
            <div class="slide-item6" data-caption="Fruit Salad">
                <a href="SaladFruit.php">
                <img src="fruit salad.png" alt="Fruit Salad" class="slide-image6">
                <div class="caption6">Fruit Salad</div></a>
            </div>
            <div class="slide-item6" data-caption="Taco Salad">
                <a href="SaladTaco.php">
                <img src="Taco salad.png" alt="Taco Salad" class="slide-image6">
                <div class="caption6">Taco Salad</div></a>
            </div>
        </div>
        <div class="slide6">
            <div class="slide-item6" data-caption="Raito Yogurt">
                <a href="YogurtEasyRaita.php">
                <img src="Raita yogurt.png" alt="Raito Yogurt" class="slide-image6">
                <div class="caption6">Raita Yogurt</div></a>
            </div>
            <div class="slide-item6" data-caption="Strawberry yogurt ">
                <a href="YogurtStrawberry.php">
                <img src="Strawberry yogurt.png" alt="Strawberry yogurt " class="slide-image6">
                <div class="caption6">Strawberry Yogurt </div></a>
            </div>
            <div class="slide-item6" data-caption="Mixberry Yorgurt ">
                <a href="YogurtMixberry.php">
                <img src="Mixberry yorgurt.png" alt="Mixberry Yorgurt " class="slide-image6">
                <div class="caption6">Mixberry Yorgurt </div></a>
            </div>
        </div>
    </div>
    <!-- Next and previous buttons -->
    <a class="prev6" onclick="moveSlide6(-1)">&#10094;</a>
    <a class="next6" onclick="moveSlide6(1)">&#10095;</a>
</div>
<!-- ///////////////////////////////////////////////////////Dessert ////////////////////////////////////////////////////////////////////-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Slide7  -->
<h9 style="color: #281F19; font-size: 30px; line-height: 1px;"><b><br>Dessert</b></h9><br>
<hr style="height:2px; border-width:10; background-color: #7A5D3A;line-height: 1px;"><br>
<h10 style="color: #281F19; font-size: 20px; line-height: 1px;"><b>Ice Cream</b></h6><br><br>

<div class="slideshow-container7"  id="slideshowContainer7" style="line-height: 1px;" >
  
  <div class="slides7" id="slideContainer7" >
      <div class="slide7">
          <div class="slide-item7" data-caption="Espresso Choc Chip Brownie">
              <a href="IcedCreamEspresso Choc Chip Brownie.php">
              <img src="Espresso Choc Chip Brownie.png" alt="Espresso Choc Chip Brownie" class="slide-image7">
              <div class="caption7">Espresso Choc Chip Brownie</div></a>
          </div>
          <div class="slide-item7" data-caption="Mochi Custard Waffle">
              <a href="ceCreamMochi Custard Waffle.php">
              <img src="Mochi Custard Waffle.png" alt="Mochi Custard Waffle" class="slide-image7">
              <div class="caption7">Mochi Custard Waffle</div></a>
          </div>
          <div class="slide-item7" data-caption="Caramel Pancake">
              <a href="IceCreamCaremel%20Pancake.php">
              <img src="Caramel Pancake.png" alt="Caramel Pancake" class="slide-image7">
              <div class="caption7">Caramel Pancake</div></a>
          </div>
      </div>
      <div class="slide7">
          <div class="slide-item7" data-caption="Shibuya Honey Toast">
              <a href="IceCreamShibuya%20Honey%20Toast.php">
              <img src="Shibuya Honey Toast.png" alt="Shibuya Honey Toast" class="slide-image7">
              <div class="caption7">Shibuya Honey Toast</div></a>
          </div>
      </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev7" onclick="moveSlide7(-1)">&#10094;</a>
  <a class="next7" onclick="moveSlide7(1)">&#10095;</a>
</div>
<!-- ////////////////////////////////////////////////////////slide8/////////////////////////////////////////////////////////// -->
<h11 style="color: #281F19; font-size: 20px; line-height: 2px;"><b>Tart</b></h11>
<div class="slideshow-container8" id="slideshowContainer8">
  
  <div class="slides8" id="slideContainer8">
      <div class="slide8">
          <div class="slide-item8" data-caption="Lemon tart">
              <a href="TartLemon.php">
              <img src="Lemon tart.png" alt="Lemon tart" class="slide-image8">
              <div class="caption8">Lemon tart</div></a>
          </div>
          <div class="slide-item8" data-caption="Almond tart">
              <a href="TartAlmond.php">
              <img src="Almond tart.png" alt="Almond tart" class="slide-image8">
              <div class="caption8">Almond tart</div></a>
          </div>
          <div class="slide-item8" data-caption="Strawberry tart">
              <a href="TartStrawberry.php">
              <img src="Strawberry tart.png" alt="Strawberry tart" class="slide-image8">
              <div class="caption8">Strawberry tart</div></a>
          </div>
      </div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev8" onclick="moveSlide8(-1)"></a>
  <a class="next8" onclick="moveSlide8(1)"></a>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////slide9 -->
<h12 style="color: #281F19; font-size: 20px; "><b>Cake</b></h12>
<div class="slideshow-container9" id="slideshowContainer9">
  
  <div class="slides9" id="slideContainer9">
      <div class="slide9">
          <div class="slide-item9" data-caption="Blueberry Cheesecake ">
              <a href="CakeBlueberryCheesecake.php">
              <img src="Blueberry Cheesecake.png" alt="Blueberry Cheesecake " class="slide-image9">
              <div class="caption9">Blueberry Cheesecake </div></a>
          </div>
          <div class="slide-item9" data-caption="Starbucks Signature Chocolate Cake">
              <a href="CakeChocolate.php">
              <img src="Starbucks Signature Chocolate Cake.png" alt="Starbucks Signature Chocolate Cake" class="slide-image9">
              <div class="caption9">Chocolate Cake</div></a>
          </div>
          <div class="slide-item9" data-caption="Coconut Cake">
              <a href="CakeCoconut.php">
              <img src="Coconut Cake.png" alt="Coconut Cake" class="slide-image9">
              <div class="caption9">Coconut Cake</div></a>
          </div>
      </div>
      <div class="slide9">
          <div class="slide-item9" data-caption="Basque Cheese Cake">
              <a href="CakeBasqueCheeseCake.php">
              <img src="Basque Cheese Cake.png" alt="Basque Cheese Cake" class="slide-image9">
              <div class="caption9">Basque Cheese Cake</div></a>
          </div>
          <div class="slide-item9" data-caption="Banoffee Pie">
              <a href="CakeBanoffeePie.php">
              <img src="Banoffee Pie.png" alt="Banoffee Pie" class="slide-image9">
              <div class="caption9">Banoffee Pie</div></a>
          </div>

          <div class="slide-item9" data-caption="Espresso ChocChip Brownie">
              <a href="CakeEspressoChocchip.php">
              <img src="Espresso ChocChip Brownie.png" alt="Espresso ChocChip Brownie" class="slide-image9">
              <div class="caption9">Espresso ChocChip Brownie</div></a>
          </div>
      </div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev9" onclick="moveSlide9(-1)">&#10094;</a>
  <a class="next9" onclick="moveSlide9(1)">&#10095;</a>
</div>
<!--///////////////////////////////////////////////////////////////////// Vegetarian////////////////////////////////////////////// -->
<!--/////////////////////////////////////////////////////////////////////// slide10 //////////////////////////////////////////////////////-->
<h13 style="color: #281F19; font-size: 30px; line-height: 5px;"><b><br>Vegetarian</b></h13>
<hr style="height:2px; border-width:10; background-color: #7A5D3A;line-height: 1px;">

<div class="slideshow-container10"  id="slideshowContainer10" style="line-height: 1px;" >
  
  <div class="slides10" id="slideContainer10" >
      <div class="slide10">
          <div class="slide-item10" data-caption="Panzanella">
              <a href="Panzanella.php">
              <img src="7.png" alt="Panzanella" class="slide-image10">
              <div class="caption10">Panzanella</div></a>
          </div>
          <div class="slide-item10" data-caption="Caprese Salad">
              <a href="CapreseSalad.php">
              <img src="2.png" alt="Caprese Salad" class="slide-image10">
              <div class="caption10">Caprese Salad</div></a>
          </div>
          <div class="slide-item10" data-caption="Chimichurri Sauce">
              <a href="ChimichurriSauce.php">
              <img src="1.png" alt="Chimichurri Sauce" class="slide-image10">
              <div class="caption10">Chimichurri Sauce</div></a>
          </div>
      </div>
      <div class="slide10">
          <div class="slide-item10" data-caption="Corn Fritters">
              <a href="EasyCornFritters.php">
              <img src="3.png" alt="Corn Fritters" class="slide-image10">
              <div class="caption10">Corn Fritters</div></a>
          </div>
          <div class="slide-item10" data-caption="Jeweled Rice">
              <a href="Jeweled.php">
              <img src="4.png" alt="Jeweled Rice" class="slide-image10">
              <div class="caption10">Jeweled Rice</div></a>
          </div>
          <div class="slide-item10" data-caption="Mexican Street Corn Salad">
              <a href="ChimichurriSauce.php">
              <img src="6.png" alt="Mexican Street Corn Salad" class="slide-image10">
              <div class="caption10">Mexican Street Corn Salad</div></a>
          </div>
      </div>
      <div class="slide10">
    <div class="slide-item10" data-caption="Mint Julep">
        <a href="Mexican.php">
        <img src="5.png" alt="Mint Julep" class="slide-image10">
        <div class="caption10">Mint Julep</div></a>
    </div>
  </div>
  
  </div>
  <!-- Next and previous buttons -->
  <a class="prev10" onclick="moveSlide10(-1)">&#10094;</a>
  <a class="next10" onclick="moveSlide10(1)">&#10095;</a>
</div>


<div class="image-container1" id="imageContainer">
  <!-- Search results will be dynamically inserted here -->
</div>
<div class="image-container2" id="imageContainer2">
    <!-- Search results will be dynamically inserted here -->
</div>
<div class="image-container3" id="imageContainer3">
    <!-- Search results will be dynamically inserted here -->
</div>
<div class="image-container4" id="imageContainer4">
</div>
<div class="image-container5" id="imageContainer5">
</div>
<div class="image-container6" id="imageContainer6">
    <!-- Search results will be dynamically inserted here -->
  </div>
  <div class="image-container7" id="imageContainer7">
      <!-- Search results will be dynamically inserted here -->
  </div>
  <div class="image-container8" id="imageContainer8">
      <!-- Search results will be dynamically inserted here -->
  </div>
  <div class="image-container9" id="imageContainer9">
  </div>
  <div class="image-container10" id="imageContainer10">
  </div>

</div>

<br>
<br>
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
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// dropdown -->
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////slide0 -->
<script>
let slideIndex0 = 0;
let slideInterval = setInterval(() => moveSlide0(1), 3000); // Auto-slide every 3 seconds

function moveSlide0(n) {
  clearInterval(slideInterval); // Stop auto-slide when user interacts
  showSlides0(slideIndex0 += n);
  slideInterval = setInterval(() => moveSlide0(1), 3000); // Restart auto-slide
}

function currentSlide0(n) {
  clearInterval(slideInterval); // Stop auto-slide when user interacts
  showSlides0(slideIndex0 = n - 1);
  slideInterval = setInterval(() => moveSlide0(1), 3000); // Restart auto-slide
}

function showSlides0(n) {
  let i;
  let slides0 = document.getElementsByClassName("slide0");
  let dots0 = document.getElementsByClassName("dot0");
  let slideContainer0 = document.getElementById("slideContainer0");

  if (n >= slides0.length) {slideIndex0 = 0}    
  if (n < 0) {slideIndex0 = slides0.length - 1}

  // Move the slide container
  slideContainer0.style.transform = "translateX(" + (-slideIndex0 * 100) + "%)";

  // Update dots
  for (i = 0; i < dots0.length; i++) {
    dots0[i].className = dots0[i].className.replace(" active0", "");
  }
  dots0[slideIndex0].className += " active0";
}

// Initialize first slide
showSlides0(slideIndex0);
</script>

<script>
    let slideIndex1 = 0;
    let slideIndex2 = 0;
    let slideIndex3 = 0;
    let slideIndex4 = 0;
    let slideIndex5 = 0;
    let slideIndex6 = 0;
    let slideIndex7 = 0;
    let slideIndex8 = 0;
    let slideIndex9 = 0;
    let slideIndex10 = 0;
    // Function to move slides
    function moveSlide1(n) {
        showSlides1(slideIndex1 += n);
    }
    function moveSlide2(n) {
        showSlides2(slideIndex2 += n);
    }
    function moveSlide3(n) {
        showSlides3(slideIndex3 += n);
    }
    function moveSlide4(n) {
        showSlides4(slideIndex4 += n);
    }
    function moveSlide5(n) {
        showSlides5(slideIndex5 += n);
    }
    function moveSlide6(n) {
        showSlides6(slideIndex6 += n);
    }
    function moveSlide7(n) {
        showSlides7(slideIndex7 += n);
    }
    function moveSlide8(n) {
        showSlides8(slideIndex8 += n);
    }
    function moveSlide9(n) {
        showSlides9(slideIndex9 += n);
    }
    function moveSlide10(n) {
        showSlides10(slideIndex10 += n);
    }

    // Function to show slides
    function showSlides1(n) {
    let i;
    let slides1 = document.getElementsByClassName("slide1");
    if (n >= slides1.length) {slideIndex1 = 0}    
    if (n < 0) {slideIndex1 = slides1.length - 1}
    document.getElementById("slideContainer1").style.transform = "translateX(" + (-slideIndex1 * 100) + "%)";
}

function showSlides2(n) {
    let i;
    let slides2 = document.getElementsByClassName("slide2");
    if (n >= slides2.length) {slideIndex2 = 0}    
    if (n < 0) {slideIndex2 = slides2.length - 1}
    document.getElementById("slideContainer2").style.transform = "translateX(" + (-slideIndex2 * 100) + "%)";
}
function showSlides3(n) {
    let i;
    let slides3 = document.getElementsByClassName("slide3");
    if (n >= slides3.length) {slideIndex3 = 0}    
    if (n < 0) {slideIndex3 = slides3.length - 1}
    document.getElementById("slideContainer3").style.transform = "translateX(" + (-slideIndex3 * 100) + "%)";
}
function showSlides4(n) {
    let i;
    let slides4 = document.getElementsByClassName("slide4");
    if (n >= slides4.length) {slideIndex4 = 0}    
    if (n < 0) {slideIndex4 = slides4.length - 1}
    document.getElementById("slideContainer4").style.transform = "translateX(" + (-slideIndex4 * 100) + "%)";
}
function showSlides5(n) {
    let i;
    let slides5 = document.getElementsByClassName("slide5");
    if (n >= slides5.length) {slideIndex5 = 0}    
    if (n < 0) {slideIndex5 = slides5.length - 1}
    document.getElementById("slideContainer5").style.transform = "translateX(" + (-slideIndex5 * 100) + "%)";
}

function showSlides6(n) {
    let i;
    let slides6 = document.getElementsByClassName("slide6");
    if (n >= slides6.length) {slideIndex6 = 0}    
    if (n < 0) {slideIndex6 = slides6.length - 1}
    document.getElementById("slideContainer6").style.transform = "translateX(" + (-slideIndex6 * 100) + "%)";
}

function showSlides7(n) {
    let i;
    let slides7 = document.getElementsByClassName("slide7");
    if (n >= slides7.length) {slideIndex7 = 0}    
    if (n < 0) {slideIndex7 = slides7.length - 1}
    document.getElementById("slideContainer7").style.transform = "translateX(" + (-slideIndex7 * 100) + "%)";
}
function showSlides8(n) {
    let i;
    let slides8 = document.getElementsByClassName("slide8");
    if (n >= slides8.length) {slideIndex8 = 0}    
    if (n < 0) {slideIndex8 = slides8.length - 1}
    document.getElementById("slideContainer8").style.transform = "translateX(" + (-slideIndex8 * 100) + "%)";
}
function showSlides9(n) {
    let i;
    let slides9 = document.getElementsByClassName("slide9");
    if (n >= slides9.length) {slideIndex9 = 0}    
    if (n < 0) {slideIndex9 = slides9.length - 1}
    document.getElementById("slideContainer9").style.transform = "translateX(" + (-slideIndex9 * 100) + "%)";
}
function showSlides10(n) {
    let i;
    let slides10 = document.getElementsByClassName("slide10");
    if (n >= slides10.length) {slideIndex10 = 0}    
    if (n < 0) {slideIndex10 = slides10.length - 1}
    document.getElementById("slideContainer10").style.transform = "translateX(" + (-slideIndex10 * 100) + "%)";
}
// Initialize slides
showSlides1(slideIndex1);
showSlides2(slideIndex2);
showSlides3(slideIndex3);
showSlides4(slideIndex4);
showSlides5(slideIndex5);
showSlides6(slideIndex6);
showSlides7(slideIndex7);
showSlides8(slideIndex8);
showSlides9(slideIndex9);
showSlides10(slideIndex10);

    // Function to display images based on search query
    function displayImages(query) {
        const searchContainer = document.querySelector('.slideshow-container1');
        const imageContainer = document.getElementById('imageContainer');
        const slideItems = document.querySelectorAll('.slide-item1');
        
        if (query) {
            searchContainer.style.display = 'none'; // Hide slideshow
            imageContainer.style.display = 'flex'; // Show image list

            // Clear previous images
            imageContainer.innerHTML = '';

            // Filter images based on the query
            const filteredImages = Array.from(slideItems).filter(item => 
                item.getAttribute('data-caption').toLowerCase().includes(query.toLowerCase())
            );

            // Display filtered images
            filteredImages.forEach(item => {
                const imageItem = document.createElement('div');
                imageItem.classList.add('image-item1');
                
                const img = document.createElement('img');
                img.src = item.querySelector('img').src;
                img.alt = item.getAttribute('data-caption');
                
                const caption = document.createElement('div');
                caption.classList.add('caption');
                caption.textContent = item.getAttribute('data-caption');
                
                imageItem.appendChild(img);
                imageItem.appendChild(caption);
                
                imageContainer.appendChild(imageItem);
            });

            // Display a message if no images match the search query
            if (filteredImages.length === 0) {
                imageContainer.innerHTML = '<p>No result found.</p>';
            }
        } else {
            searchContainer.style.display = 'block'; // Show slideshow
            imageContainer.style.display = 'none'; // Hide image list
        }
    }
    function displayImages2(query2) {
            const searchContainer2 = document.querySelector('.slideshow-container2');
            const imageContainer2 = document.getElementById('imageContainer2');
            const slideItems2 = document.querySelectorAll('.slide-item2');
            
            if (query2) {
                searchContainer2.style.display = 'none'; // Hide slideshow
                imageContainer2.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer2.innerHTML = '';

                // Filter images based on the query
                const filteredImages2 = Array.from(slideItems2).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query2.toLowerCase())
                );

                // Display filtered images
                filteredImages2.forEach(item => {
                    const imageItem2 = document.createElement('div');
                    imageItem2.classList.add('image-item2');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption2 = document.createElement('div');
                    caption2.classList.add('caption2');
                    caption2.textContent = item.getAttribute('data-caption');
                    
                    imageItem2.appendChild(img);
                    imageItem2.appendChild(caption2);
                    
                    imageContainer2.appendChild(imageItem2);
                });

                // Display a message if no images match the search query
                if (filteredImages2.length === 0) {
                    imageContainer2.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer2.style.display = 'block'; // Show slideshow
                imageContainer2.style.display = 'none'; // Hide image list
            }
        }

        function displayImages3(query3) {
            const searchContainer3 = document.querySelector('.slideshow-container3');
            const imageContainer3 = document.getElementById('imageContainer3');
            const slideItems3 = document.querySelectorAll('.slide-item3');
            
            if (query3) {
                searchContainer3.style.display = 'none'; // Hide slideshow
                imageContainer3.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer3.innerHTML = '';

                // Filter images based on the query
                const filteredImages3 = Array.from(slideItems3).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query3.toLowerCase())
                );

                // Display filtered images
                filteredImages3.forEach(item => {
                    const imageItem3 = document.createElement('div');
                    imageItem3.classList.add('image-item3');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption3 = document.createElement('div');
                    caption3.classList.add('caption3');
                    caption3.textContent = item.getAttribute('data-caption');
                    
                    imageItem3.appendChild(img);
                    imageItem3.appendChild(caption3);
                    
                    imageContainer3.appendChild(imageItem3);
                });

                // Display a message if no images match the search query
                if (filteredImages3.length === 0) {
                    imageContainer3.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer3.style.display = 'block'; // Show slideshow
                imageContainer3.style.display = 'none'; // Hide image list
            }
        }
///////////////////////////////////////////////////////////////////// Slide4 ////////////////////////////////////////////////
function displayImages4(query4) {
    const searchContainer4 = document.querySelector('.slideshow-container4');
    const imageContainer4 = document.getElementById('imageContainer4');
    const slideItems4 = document.querySelectorAll('.slide-item4');

    if (query4) {
        searchContainer4.style.display = 'none'; // Hide slideshow
        imageContainer4.style.display = 'flex'; // Show image list

//         // Filter images based on the query
        slideItems4.forEach(item => {
            const caption = item.querySelector('.caption4').textContent.toLowerCase();
            if (caption.includes(query4.toLowerCase())) {
                item.style.display = 'flex'; // Show items that match the search term
            } else {
                item.style.display = 'none'; // Hide those that don't
            }
        });

//         // Display a message if no images match the search query
        const visibleItems = Array.from(slideItems4).some(item => item.style.display === 'flex');
        if (!visibleItems) {
            imageContainer4.innerHTML = '<p>No result found.</p>';
        }
    } else {
        searchContainer4.style.display = 'block'; // Show slideshow
        imageContainer4.style.display = 'none'; // Hide image list
    }
}

function displayImages5(query5) {
    const searchContainer5 = document.querySelector('.slideshow-container5');
    const imageContainer5 = document.getElementById('imageContainer5');
    const slideItems5 = document.querySelectorAll('.slide-item5');

    if (query5) {
        searchContainer5.style.display = 'none'; // Hide slideshow
        imageContainer5.style.display = 'flex'; // Show image list

        // Filter images based on the query
        slideItems5.forEach(item => {
            const caption = item.querySelector('.caption5').textContent.toLowerCase();
            if (caption.includes(query5.toLowerCase())) {
                item.style.display = 'flex'; // Show items that match the search term
            } else {
                item.style.display = 'none'; // Hide those that don't
            }
        });

        // Display a message if no images match the search query
        const visibleItems = Array.from(slideItems5).some(item => item.style.display === 'flex');
        if (!visibleItems) {
            imageContainer5.innerHTML = '<p>No result found.</p>';
        }
    } else {
        searchContainer5.style.display = 'block'; // Show slideshow
        imageContainer5.style.display = 'none'; // Hide image list
    }
}
//////////////////////////////////////////////////////////////////////////////////// slide6////////////////////////////////////////////////
function displayImages6(query6) {
            const searchContainer6 = document.querySelector('.slideshow-container6');
            const imageContainer6 = document.getElementById('imageContainer6');
            const slideItems6 = document.querySelectorAll('.slide-item6');
            
            if (query6) {
                searchContainer6.style.display = 'none'; // Hide slideshow
                imageContainer6.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer6.innerHTML = '';

                // Filter images based on the query
                const filteredImages6 = Array.from(slideItems6).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query6.toLowerCase())
                );

                // Display filtered images
                filteredImages6.forEach(item => {
                    const imageItem6 = document.createElement('div');
                    imageItem6.classList.add('image-item6');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption6 = document.createElement('div');
                    caption6.classList.add('caption6');
                    caption6.textContent = item.getAttribute('data-caption');
                    
                    imageItem6.appendChild(img);
                    imageItem6.appendChild(caption6);
                    
                    imageContainer6.appendChild(imageItem6);
                });

                // Display a message if no images match the search query
                if (filteredImages6.length === 0) {
                    imageContainer6.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer6.style.display = 'block'; // Show slideshow
                imageContainer6.style.display = 'none'; // Hide image list
            }
        }
    function displayImages7(query7) {
            const searchContainer7 = document.querySelector('.slideshow-container7');
            const imageContainer7 = document.getElementById('imageContainer7');
            const slideItems7 = document.querySelectorAll('.slide-item7');
            
            if (query7) {
                searchContainer7.style.display = 'none'; // Hide slideshow
                imageContainer7.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer7.innerHTML = '';

                // Filter images based on the query
                const filteredImages7 = Array.from(slideItems7).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query7.toLowerCase())
                );

                // Display filtered images
                filteredImages7.forEach(item => {
                    const imageItem7 = document.createElement('div');
                    imageItem7.classList.add('image-item7');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption7 = document.createElement('div');
                    caption7.classList.add('caption7');
                    caption7.textContent = item.getAttribute('data-caption');
                    
                    imageItem7.appendChild(img);
                    imageItem7.appendChild(caption7);
                    
                    imageContainer7.appendChild(imageItem7);
                });

                // Display a message if no images match the search query
                if (filteredImages7.length === 0) {
                    imageContainer7.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer7.style.display = 'block'; // Show slideshow
                imageContainer7.style.display = 'none'; // Hide image list
            }
        }

        function displayImages8(query8) {
            const searchContainer8 = document.querySelector('.slideshow-container8');
            const imageContainer8 = document.getElementById('imageContainer8');
            const slideItems8 = document.querySelectorAll('.slide-item8');
            
            if (query8) {
                searchContainer8.style.display = 'none'; // Hide slideshow
                imageContainer8.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer8.innerHTML = '';

                // Filter images based on the query
                const filteredImages8 = Array.from(slideItems8).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query8.toLowerCase())
                );

                // Display filtered images
                filteredImages8.forEach(item => {
                    const imageItem8 = document.createElement('div');
                    imageItem8.classList.add('image-item8');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption8 = document.createElement('div');
                    caption8.classList.add('caption8');
                    caption8.textContent = item.getAttribute('data-caption');
                    
                    imageItem8.appendChild(img);
                    imageItem8.appendChild(caption8);
                    
                    imageContainer8.appendChild(imageItem8);
                });

                // Display a message if no images match the search query
                if (filteredImages8.length === 0) {
                    imageContainer8.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer8.style.display = 'block'; // Show slideshow
                imageContainer8.style.display = 'none'; // Hide image list
            }
        }
///////////////////////////////////////////////////////////////////// Slide9////////////////////////////////////////////////
function displayImages9(query9) {
            const searchContainer9 = document.querySelector('.slideshow-container9');
            const imageContainer9 = document.getElementById('imageContainer9');
            const slideItems9 = document.querySelectorAll('.slide-item9');
            
            if (query9) {
                searchContainer9.style.display = 'none'; // Hide slideshow
                imageContainer9.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer9.innerHTML = '';

                // Filter images based on the query
                const filteredImages9 = Array.from(slideItems9).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query9.toLowerCase())
                );

                // Display filtered images
                filteredImages9.forEach(item => {
                    const imageItem9 = document.createElement('div');
                    imageItem9.classList.add('image-item9');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption9 = document.createElement('div');
                    caption9.classList.add('caption9');
                    caption9.textContent = item.getAttribute('data-caption');
                    
                    imageItem9.appendChild(img);
                    imageItem9.appendChild(caption9);
                    
                    imageContainer9.appendChild(imageItem9);
                });

                // Display a message if no images match the search query
                if (filteredImages9.length === 0) {
                    imageContainer9.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer9.style.display = 'block'; // Show slideshow
                imageContainer9.style.display = 'none'; // Hide image list
            }
        }

    function displayImages10(query10) {
            const searchContainer10 = document.querySelector('.slideshow-container10');
            const imageContainer10 = document.getElementById('imageContainer10');
            const slideItems10 = document.querySelectorAll('.slide-item10');
            
            if (query10) {
                searchContainer10.style.display = 'none'; // Hide slideshow
                imageContainer10.style.display = 'flex'; // Show image list

                // Clear previous images
                imageContainer10.innerHTML = '';

                // Filter images based on the query
                const filteredImages10 = Array.from(slideItems10).filter(item => 
                    item.getAttribute('data-caption').toLowerCase().includes(query10.toLowerCase())
                );

                // Display filtered images
                filteredImages10.forEach(item => {
                    const imageItem10 = document.createElement('div');
                    imageItem10.classList.add('image-item10');
                    
                    const img = document.createElement('img');
                    img.src = item.querySelector('img').src;
                    img.alt = item.getAttribute('data-caption');
                    
                    const caption10 = document.createElement('div');
                    caption10.classList.add('caption10');
                    caption10.textContent = item.getAttribute('data-caption');
                    
                    imageItem10.appendChild(img);
                    imageItem10.appendChild(caption10);
                    
                    imageContainer10.appendChild(imageItem10);
                });

                // Display a message if no images match the search query
                if (filteredImages10.length === 0) {
                    imageContainer7.innerHTML = '<p>No result found.</p>';
                }
            } else {
                searchContainer10.style.display = 'block'; // Show slideshow
                imageContainer10.style.display = 'none'; // Hide image list
            }
        }

    // Event listener for search input
    document.getElementById("searchButton").addEventListener("click", function() {
    const searchTerm = document.getElementById("searchInput").value.toLowerCase();
    const items1 = document.querySelectorAll('.slide-item1');
    const items2 = document.querySelectorAll('.slide-item2');
    const items3 = document.querySelectorAll('.slide-item3');
    const items4 = document.querySelectorAll('.slide-item4');
    const items5 = document.querySelectorAll('.slide-item5');
    const items6 = document.querySelectorAll('.slide-item6');
    const items7 = document.querySelectorAll('.slide-item7');
    const items8= document.querySelectorAll('.slide-item8');
    const items9 = document.querySelectorAll('.slide-item9');
    const items10 = document.querySelectorAll('.slide-item10');
    
// hide/////
    // const paragraph = document.querySelector('.main p1');
    const header1 = document.querySelector('.main h1');
    const header2 = document.querySelector('.main h2');
    const header3 = document.querySelector('.main h3');
    const header4 = document.querySelector('.main h4');
    const header5 = document.querySelector('.main h5');
    const header6 = document.querySelector('.main h6');
    const header7 = document.querySelector('.main h7');
    const header8 = document.querySelector('.main h8');
    const header9 = document.querySelector('.main h9');
    const header10 = document.querySelector('.main h10');
    const header11 = document.querySelector('.main h11');
    const header12 = document.querySelector('.main h12');
    const header13 = document.querySelector('.main h13');

    const hr1 = document.querySelector('.main hr');
    const hr2 = document.querySelector('.main hr');
    const hr3 = document.querySelector('.main hr');
    const hr4 = document.querySelector('.main hr');

    const hidePrev1 = document.querySelector('.prev1');
    const hideNext1 = document.querySelector('.next1');

    const hidePrev2 = document.querySelector('.prev2');
    const hideNext2 = document.querySelector('.next2');

    const hidePrev3 = document.querySelector('.prev3');
    const hideNext3 = document.querySelector('.next3');

    const hidePrev4 = document.querySelector('.prev4');
    const hideNext4 = document.querySelector('.next4');

    const hidePrev5 = document.querySelector('.prev5');
    const hideNext5 = document.querySelector('.next5');

    const hidePrev6 = document.querySelector('.prev6');
    const hideNext6 = document.querySelector('.next6');

    const hidePrev7 = document.querySelector('.prev7');
    const hideNext7 = document.querySelector('.next7');

    const hidePrev8 = document.querySelector('.prev8');
    const hideNext8 = document.querySelector('.next8');

    const hidePrev9 = document.querySelector('.prev9');
    const hideNext9 = document.querySelector('.next9');

    const hidePrev10 = document.querySelector('.prev10');
    const hideNext10= document.querySelector('.next10');


    // paragraph.style.display = 'none';
    header1.style.display = 'none';
    header2.style.display = 'none';
    header3.style.display = 'none';
    header4.style.display = 'none';
    header5.style.display = 'none';
    header6.style.display = 'none';
    header7.style.display = 'none';
    header8.style.display = 'none';
    header9.style.display = 'none';
    header10.style.display = 'none';
    header11.style.display = 'none';
    header12.style.display = 'none';
    header13.style.display = 'none';
    
    hidePrev1.style.display = 'none';
    hideNext1.style.display = 'none';

    hidePrev2.style.display = 'none';
    hideNext2.style.display = 'none';

    hidePrev3.style.display = 'none';
    hideNext3.style.display = 'none';

    hidePrev4.style.display = 'none';
    hideNext4.style.display = 'none';

    hidePrev5.style.display = 'none';
    hideNext5.style.display = 'none';

    hidePrev6.style.display = 'none';
    hideNext6.style.display = 'none';

    hidePrev7.style.display = 'none';
    hideNext7.style.display = 'none';

    // hidePrev8.style.display = 'none';
    // hideNext8.style.display = 'none';

    hidePrev9.style.display = 'none';
    hideNext9.style.display = 'none';

    hidePrev10.style.display = 'none';
    hideNext10.style.display = 'none';

    hr1.style.display = 'none';
    hr2.style.display = 'none';
    hr3.style.display = 'none';
    hr4.style.display = 'none';

    // Filter images for the first slideshow
    items1.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    // Filter images for the second slideshow
    items2.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    items3.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
        });
    
    ////////////////////////////////////////////////////slide4,5/////////////////////////////////
    items4.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    items5.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
        });
    items6.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    // Filter images for the second slideshow
    items7.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    items8.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
        });
    
    ////////////////////////////////////////////////////slide4,5/////////////////////////////////
    items9.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
    });

    items10.forEach(item => {
        const caption = item.dataset.caption.toLowerCase();
        if (caption.includes(searchTerm)) {
            item.style.display = 'block'; // Show items that match the search term
        } else {
            item.style.display = 'none'; // Hide those that don't
        }
        });

   });

</script>

</body>
</html>
