<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Room Reservation</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>
    <h1>Hotel Room Reservation</h1>
    <form method="post" action="reserver.php">
      <label for="checkin-date">Check-In Date:</label>
      <input type="date" id="checkin-date" name="checkin-date" required>
      <br>
      <label for="checkout-date">Check-Out Date:</label>
      <input type="date" id="checkout-date" name="checkout-date" required>
      <br>
      <label for="num-guests">Number of Guests:</label>
      <input type="number" id="num-guests" name="num-guests" min="1" max="4" required>
      <br>
      <label for="room-type">Room Type:</label>
      <select id="room-type" name="room-type" required>
        <option value="">Select a Room Type</option>
        <option value="standard">Standard Room</option>
        <option value="deluxe">Deluxe Room</option>
        <option value="suite">Suite</option>
      </select>
      <br>
      <br>
      <button type="submit" name="reserve">
        Reserve
    </button>
    </form>
  </body>
</html>
