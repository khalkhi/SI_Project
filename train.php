<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RailWay Shipping - Packages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
          <h1>RailWay Shipping</h1>
          <ul>
            <li><a href ="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="packages.html" class="active">Packages</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div id="tracking-header">
            <form id="tracking-form">
                <input type="text" id="tracking-number" name="tracking-number" placeholder="Tracking Number" required>
                <button type="submit">Track</button>
            </form>
        </div>
        </nav>
      </header>
      <main>
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
                    <tr>
                        <td>123456789</td>
                        <td>Kingston</td>
                        <td>Montego Bay</td>
                        <td>5</td>
                        <td>1,200</td>
                        <td>In Transit</td>
                    </tr>
                    <tr>
                        <td>987654321</td>
                        <td>Spanish Town</td>
                        <td>Negril</td>
                        <td>10</td>
                        <td>2,500</td>
                        <td>Delivered</td>
                    </tr>
                    <tr>
                        <td>456789123</td>
                        <td>Ocho Rios</td>
                        <td>Port Antonio</td>
                        <td>3</td>
                        <td>800</td>
                        <td>Pending</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </section>
        
    </main>

    <footer>
        <p>© 2024 RailWay Shipping</p>
      </footer>
</body>
</html>
