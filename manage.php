<?php
session_start();
include 'users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .active {color: #09a939;}

        table {
            font-family: arial, sans-serif; border-collapse: collapse;
            width: 100%;
        }

        td, th {
            text-align: left; padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <title>Manage Package</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="content about">
    <h1>Admin</h1>
</div>

<div class="content">
    <?php
    if (!isset($_SESSION['id'])) { ?>
        <br>
        <h2><?php echo "Login to view your package information..." ?></h2>
        <br>
        <h3>Or <a href="./signup.php">Sign Up Here</a></h3>
    <?php
    } else {
        if ($_SESSION['admin'] == true) {
            // Display admin section
            ?>
            <br>
            <h3>Manage all packages</h3>
            <br>
            <table>
                <tr>
                    <th>Tracking #</th>
                    <th>TO</th>
                    <th>From</th>
                    <th>Weight (lb)</th>
                    <th>Current Status</th>
                </tr>

                <?php
                $sql = "SELECT * FROM `package`";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['tracking'] ?></td>
                            <td><?php echo $row['to_addr'] ?></td>
                            <td><?php echo $row['from_addr'] ?></td>
                            <td><?php echo $row['weight'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td><a href="edit.php?package=<?php echo $row['id'] ?>">Edit</a></td>
                        </tr>
                    <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </table>
        <?php
        } else {
            // Display normal user section
            ?>
            <br>
            <h3>Track Packages</h3>
            <br>
            <table>
                <tr>
                    <th>Tracking #</th>
                    <th>To</th>
                    <th>From</th>
                    <th>Weight (lb)</th>
                    <th>Cost (JMD)</th>
                    <th>Current Status</th>
                </tr>

                <?php
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM `package` WHERE `sender` = $id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['tracking'] ?></td>
                            <td><?php echo $row['to_addr'] ?></td>
                            <td><?php echo $row['from_addr'] ?></td>
                            <td><?php echo $row['weight'] ?></td>
                            <td><?php echo "$" . $row['cost'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td><a href="track.php?track=<?php echo $row['tracking']; ?>">Track</a></td>
                        </tr>
                    <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </table>

            <div>
                <form>
                    <h2>Sender Information</h2>
                    <div class="form-group">
                        <label for="sender-name">Name: </label>
                        <input type="text" id="sender-name" name="sender-name">
                    </div>

                    <div class="form-group">
                        <label for="sender-address">Address:</label>
                        <input type="text" id="sender-address" name="sender-address">
                    </div>

                    <div class="form-group">
                        <label for="sender-city">City:</label>
                        <input type="text" id="sender-city" name="sender-city">
                    </div>

                    <div class="form-group">
                        <label for="sender-state">State:</label>
                        <input type="text" id="sender-state" name="sender-state">
                    </div>

                    <div class="form-group">
                        <label for="sender-zip">Zip Code:</label>
                        <input type="text" id="sender-zip" name="sender-zip">
                    </div>

                    <h2>Recipient Information</h2>
                    <div class="form-group">
                        <label for="recipient-name">Name:</label>
                        <input type="text" id="recipient-name" name="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-address">Address:</label>
                        <input type="text" id="recipient-address" name="recipient-address">
                    </div>

                    <div class="form-group">
                        <label for="recipient-city">City:</label>
                        <input type="text" id="recipient-city" name="recipient-city">
                    </div>

                    <div class="form-group">
                        <label for="recipient-state">Parish:</label>
                        <select id="recipient-state" name="recipient-state">
                            <option value="stmary">St Mary</option>
                            <option value="stann">St Ann</option>
                            <option value="portland">Portland</option>
                            <option value="montegobay">Montego Bay</option>
                            <option value="hanover">Hanover</option>
                            <option value="stcatherine">St Catherine</option>
                            <option value="manchester">Manchester</option>
                            <option value="stelizabeth">St Elizabeth</option>
                            <option value="clarendon">Clarendon</option>
                            <option value="stjames">St James</option>
                            <option value="stthomas">St Thomas</option>
                            <option value="standrew">St Andrew</option>
                            <option value="kingston">Kingston</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-zip">Zip Code:</label>
                        <input type="text" id="recipient-zip" name="recipient-zip">
                    </div>

                    <h2>Package Information</h2>
                    <div class="form-group">
                        <label for="package-weight">Weight (in pounds):</label>
                        <input type="text" id="package-weight" name="package-weight">
                    </div>

                    <div class="form-group">
                        <label for="package-type">Type:</label>
                        <select id="package-type" name="package-type">
                            <option value="envelope">Envelope</option>
                            <option value="box">Box</option>
                            <option value="tube">Tube</option>
                        </select>
                    </div>

                    <input type="submit" value="Calculate Shipping">
                </form>
            </div>
        <?php
        }
    }
    ?>
</div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>

