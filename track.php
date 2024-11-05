<?php

include 'users.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .active{
        color: #09a939;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        text-align: left; padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #dddddd;

    }
    </style>

    <title>Track Package</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "main">
        <div class = "navbar">
            <div class = "icon">
                <h2 class="logo"> RAILWAY SHIPMENTS </h2>
        </div>
    </div>
    
    <div class="menu" >
        <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a class="active" href="./manage.php">PACKAGES</a></li>
            <li><a href="./about.php">ABOUT</a></li>
            <li><a href="./contactus.php">CONTACT</a></li>
        </ul>
    </div>

    <div class="search">
        <form action="">
            <input class="srch" type="search" name="track" placeholder="Enter tracking number">
            <a href="./track.php"> <button type="submit" class="btn">Track</button></a>
        </form>
    </div>
    </div>

    <div class="content about">
        <h1> Track Package </h1>
            <p class="par">
            Enter your tracking number to track the status of your shipment. <br>
            Whether you're sending or receiving packages, monitor your shipment's status along its journey.
            </p>
        <br>

<?php

    if (!empty($_GET['track'])) { 
    $packageid = $_GET['track'];

    //
    $sql = "SELECT * FROM package WHERE tracking = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $packageid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row){

        ?>
        <h3><?php echo "Tracking number: ". $row['tracking'] ?></h3><br> 
        <h3><?php echo "Sent to: ". $row['to_addr'] ?></h3><br>
        <h3><?php echo "Sent from: " . $row['from_addr'] ?></h3><br>
        <h3><?php echo "Item weight: ". $row['weight'] ?></h3><br> 
        <h3><?php echo "Cost: $". $row['cost'] ?></h3><br>
        <h3><?php echo " Status: ". $row['status'] ?></h3><br>
<?php
        }else{
        ?>
         <h3>No package found with that tracking number</h3><br>
        <?php
        }
    }else{ ?>

     <h3>No package found with that tracking number</h3><br>
       
    <?php
     }
        ?>
</div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>