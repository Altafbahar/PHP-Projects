

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hotel Booking</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="container">
    <h1>Hotel Booking</h1>
    <form id="bookingForm" action="booking.php" method="POST">
      <label for="name">Full Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="checkin">Check-In Date:</label>
      <input type="date" name="checkin" id="checkin" required>

      <label for="checkout">Check-Out Date:</label>
      <input type="date" name="checkout" id="checkout" required>

      <label for="room">Room Type:</label>
      <select name="room" id="room" required>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Suite">Suite</option>
      </select>

      <button type="submit">Book Now</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>





