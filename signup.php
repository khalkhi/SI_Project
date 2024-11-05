
<?php 
    include 'users.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .active{color: #09a939;}
    </style>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">RAILWAY SHIPMENTS</h2>
            </div>
        </div>
        
        <div class="menu">
            <ul>
                <li><a class="active" href="./index.php">HOME</a></li>
                <li><a href="./manage.php">PACKAGES</a></li>
                <li><a href="./about.php">ABOUT</a></li>
                <li><a href="./contactus.php">CONTACT</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Enter tracking number">
            <a href="./track.php"><button class="btn">Track</button></a>
        </div>
    </div>

    <div class="content">
        <h1>SIGN UP</h1>
        <p class="par">
            We offer several benefits for customers who choose to sign up with Railway Shipments.<br>
            These benefits include:<br>
            Discounted rates for new customers who sign up for their services.<br>
            This can be a significant savings for businesses that ship a large volume of goods.<br>
            Priority Service: to new customers, which means their packages will be given priority<br>
            over other packages for shipping and delivery.<br>
            Tracking and Delivery Notifications: We offer tracking and delivery notifications to <br>
            customers who sign up for services. This allows customers to track their packages in <br>
            real-time and receive notifications when their package is delivered.
        </p>
        
        <?php if (isset($_SESSION['id'])) { ?>
            <form class="form" action="./logout.php" method="post">
                <p>Logged in as: <b><?php echo $_SESSION['fullname'] ?></b></p>
                <button name="logout" class="btnn">Log out</button>
            </form>
        <?php } else { ?>


            <form class="form" action="signup.php" method="post">
                <h2>Sign Up Here</h2>
                <div class="error"><?php echo $error ?></div>
                <input type="text" name="fname" placeholder="Enter First Name Here" value="<?php echo $nameValue ?>">
                <input type="text" name="Iname" placeholder="Enter Last Name Here" value="<?php echo $InameValue ?>"> 
                <input type="email" name="email" placeholder="Enter Email Here" value="<?php echo $emailValue ?>">
                <input type="password" name="password" placeholder="Enter Password Here">
                <button name="signup" class="btnn">Sign up</button>

                <p class="link">Already have an account?<br><br>
                <a href="./index.php">Log in</a> here</p>
                <p class="liw">Sign up with</p>

                <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                </div>
            </form>
        <?php } ?>
    </div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>