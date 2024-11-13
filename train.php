<?php 
include 'users.php'; // Assuming 'users.php' handles user-related functionality like login or session management

// Simulating some shipment data for demonstration (In a real-world scenario, this data could come from a database)
$shipments = [
    ['tracking_number' => '123456789', 'to' => 'Kingston', 'from' => 'Montego Bay', 'weight' => 5, 'cost' => 1200, 'status' => 'In Transit'],
    ['tracking_number' => '987654321', 'to' => 'Spanish Town', 'from' => 'Negril', 'weight' => 10, 'cost' => 2500, 'status' => 'Delivered'],
    ['tracking_number' => '456789123', 'to' => 'Ocho Rios', 'from' => 'Port Antonio', 'weight' => 3, 'cost' => 800, 'status' => 'Pending']
];
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
            <form action="track.php" method="get">
                <input class="srch" type="search" name="tracking_number" placeholder="Enter tracking number">
                <button class="btn" type="submit">Track</button>
            </form>
        </div>
    </div>

    <div class="content">
        <h1> <br> Track Train<br></h1>
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
        
        <section> 
            <h2>Our Shipping Packages</h2>
            <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Tracking #</th>
                        <th>To</th>
                        <th>From</th>
                        <th>Weight (lb)</th>
                        <th>Cost (JMD)</th>
                        <th>Current Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($shipments as $shipment): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($shipment['tracking_number']); ?></td>
                            <td><?php echo htmlspecialchars($shipment['to']); ?></td>
                            <td><?php echo htmlspecialchars($shipment['from']); ?></td>
                            <td><?php echo htmlspecialchars($shipment['weight']); ?></td>
                            <td><?php echo number_format($shipment['cost']); ?></td>
                            <td><?php echo htmlspecialchars($shipment['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </section>
    </div>
    <!-- Script for icons to show -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> 
</body>

</html>
