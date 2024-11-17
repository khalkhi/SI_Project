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
    <title>MOMENTUM RAILWAYS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MOMENTUM RAILWAYS</h2>
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
        <h1>Package Shipping Rates</h1>
        <p class="par">
        <br><br>
        </p>
        <p class="par">
        Here are the current shipping rates for our packages. 
        Choose the service that best 
        suits your needs.</p>
        
        <!-- Shipping Rate Table -->
        <table>
            <thead>
                <tr>
                    <th>Package Type</th>
                    <th>Weight (up to)</th>
                    <th>Rate (USD)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Standard Package</td>
                    <td>5 kg</td>
                    <td>$10.00</td>
                </tr>
                <tr>
                    <td>Express Package</td>
                    <td>10 kg</td>
                    <td>$20.00</td>
                </tr>
                <tr>
                    <td>Heavy Package</td>
                    <td>20 kg</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Oversized Package</td>
                    <td>50 kg</td>
                    <td>$50.00</td>
                </tr>
            </tbody>
        </table>

               <!-- Form to Create Shipment -->
        <div class="form-container">
            <h2>Create a Shipment</h2> 
            <br> 
    </br>
            <form action="./create_shipment.php" method="post">
                <label for="sender_name">Sender's Name:</label>
                <input type="text" name="sender_name" id="sender_name" required placeholder="Enter sender's name">
                
                <label for="recipient_name">Recipient's Name:</label>
                <input type="text" name="recipient_name" id="recipient_name" required placeholder="Enter recipient's name">
                
                <label for="address">Delivery Address:</label>
                <input type="text" name="address" id="address" required placeholder="Enter delivery address">
                
                <label for="tracking-number">Tracking Number:</label>
                <input type="text" name="tracking-number" id="tracking-number" required placeholder="Enter Tracking Number">


                <label for="package_type">Package Type:</label>
                <select name="package_type" id="package_type" required>
                    <option value="standard">Standard Package - up to 5 kg</option>
                    <option value="express">Express Package - up to 10 kg</option>
                    <option value="heavy">Heavy Package - up to 20 kg</option>
                    <option value="oversized">Oversized Package - up to 50 kg</option>
                </select>

                <label for="weight">Weight (kg):</label>
                <input type="number" name="weight" id="weight" min="0" max="50" required placeholder="Enter package weight">
                
                <button type="submit" class="btn">Create Shipment</button>
            </form>
        </div>
        <!-- Package Tracking Form -->
        </div>
    </div>             

                <div class="icons">
                    <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://twitter.com/Plang=en"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://mail.google.com/"><ion-icon name="logo-google"></ion-icon></a>
                </div>
            </form>

        
    </div>
    <!-- Script for icons to show -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> 
</body>

</html>

