
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Page</title>
        <link rel="stylesheet" href="stylelogin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script defer src="script.js"></script>
    </head>
    <body>
        <!-- Top bar -->
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
                    <li class="nav_item">
                        <a href="Registerpage.php" class="btn">JOIN NOW</a>
                    </li>
                    <li class="nav_item">
                        <a href="Loginpagecoffee.php" class="btn">LOGIN</a>
                    </li>
                </ul>
       </div> 
    </div>    
         <br>
         <br>

<?php
    include("connection.php");
    if(isset($_POST['submit'])){

        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['pass']; 
    

    //verifying the unique username and password
    $verify_query = mysqli_query($conn, "SELECT `username`, `email` FROM `login` WHERE username = '$username'OR email = '$email'"); 
   
    if(mysqli_num_rows($verify_query)!= 0){
        echo "<div class= 'container'>
                <div class = message>
                <p>The username or email is already in use. Please try another one.</p>
              </div></div><br>";
        echo "<div class = 'button'>
            <a href='javascript: history.back()'> <button class='btn'>Go back </button></div>";      
    }else{
        mysqli_query($conn,"INSERT INTO `login`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");
        
        echo "<div class= 'container'>
                <div class = message1>
               <p>Registeration Sucessfully!</p>
              </div></div><br>";
        echo "<div class = 'button'>
        <a href='Loginpagecoffee.php'><button class='btn'>Login Now</button></div>";
    }      
}else{
?>

        <div id="form">
        <div class="Loginform">
            <form name="form" action="" onsubmit="return isvalid()" method = "POST">
                <h2>SIGN UP</h2>
                <div class="entryfield">
                    <label>Username :</label>
                    <input type="text" id="user" name="user" autocomplete="off" required>
                    <span class="fa fa-user"></span>
                </div>
                <div class="entryfield">
                    <label>Email :</label>
                    <input type="text" id="email" name="email" autocomplete="off" required>
                    <span class="fa fa-user"></span>
                </div>

                <div class="entryfield">
                    <label>Password :</label>
                    <input type="text" id="pass" name="pass" autocomplete="off" required>
                    <span class="fa fa-lock"></span>
                </div>
                 
                <div class="entryfield">
                    <input type="submit" id="btn_submit"value="Register" name="submit">
                </div>

                <div class="newAccount">
                    <span>Already a member <a href="Loginpagecoffee.php">Sign In</a></span>
                </div>
            </form>
        </div>
        <?php } ?>
        </div> 


        <!-- bottom Bar -->

        <br><br><br><br>
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

        <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            var email = document.form.email.value;
            if(user.length == "" && pass.length=="" && email.length=="" ){
                alert("Username, Password and Email field is empty!!");
                return false
        }
        else
        {
            if(user.length==""){
                alert("Username is empty!!!");
                return false
            }
            if(pass.length==""){
                alert("Password is empty!!");
                return false
            }
            if(email.length==""){
                alert("Email is empty!!");
                return false
            }
        }
    }
    </script>    
    </body>
</html>