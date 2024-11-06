<?php 
include 'users.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
        .active {
            color: #09a939;
        }
    </style>
    <title>RAILWAY SHIPMENTS</title>
    <link rel="stylesheet" href="style.css">
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
                <li><a class="active" href="/index.php">HOME</a></li>
                <li><a href="./manage.php">PACKAGES</a></li>
                <li><a href="./about.php">ABOUT</a></li>
                <li><a href="./contactus.php">CONTACT</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="tracking_number" placeholder="Enter tracking number">
            <a href="./track.php"><button class="btn">Track</button></a>
        </div>
    </div>

    <div class="content">
        <h1>WELCOME TO <br> RAILWAY SHIPMENTS<br></h1>
        <p class="par">
        <br><br>
        </p>
        <p class="par">
        We offer scheduled services from convenient locations on Jamaica's north and south coasts<br>
            including connections to Portland, St. Mary, and Negril.<br>
            Let us come to your home or business to pick up your package.<br>
            It's easy to schedule a one-time pickup online.<br>
            If you have recurring delivery needs, plan ahead with regular pickups.
        </p>
        
        <?php
        if (isset($_SESSION['id'])) { ?>
            <form class="form" action="./logout.php" method="post">
                <p>Logged in as: <b><?php echo $_SESSION['fullname']; ?></b></p>
                <button name="logout" class="btnn">Log out</button>
            </form>
        <?php } else { ?>

     

            <form class="form" action="./index.php" method="post">
                <h2>Login Here</h2>
                <p class="liw">Log in with:</p>
                <p class="liw"></p>
                <div class="error"><?php echo isset($error) ? $error : ''; ?></div>
                <input type="email" name="email" placeholder="Enter Email Here" value="<?php echo isset($emailValue) ? $emailValue : ''; ?>">
                <input type="password" name="password" placeholder="Enter Password Here" value="<?php echo isset($passwordValue) ? $passwordValue : ''; ?>">
                <button name="login" class="btnn">Login</button>

                <p class="link">Don't have an account?<br><a href="./signup.php">Sign up here</a></p>
                

                <div class="icons">
                    <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://twitter.com/Plang=en"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://mail.google.com/"><ion-icon name="logo-google"></ion-icon></a>
                </div>
            </form>

        <?php } ?>
    </div>
</body>

</html>

