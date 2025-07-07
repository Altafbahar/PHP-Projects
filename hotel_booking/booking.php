<?php

$name = $_POST["name"];
$email = $_POST["email"];
$check_in = $_POST["checkin"];
$check_out = $_POST["checkout"];
$room_type = $_POST["room"]; // Should be room type, not room number

$mycon = mysqli_connect("localhost", "root", "", "hotel_db");

if (!$mycon) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Optional: Validate dates
if ($check_in >= $check_out) {
    echo "<script>alert('Check-Out date must be after Check-In date'); window.history.back();</script>";
    exit;
}

// Step 1: Get total available rooms for selected type
$sql = "SELECT total_rooms FROM rooms WHERE room_type = ?";
$stmt = $mycon->prepare($sql);
$stmt->bind_param("s", $room_type);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "<script>alert('Invalid room type selected.'); window.history.back();</script>";
    exit;
}

$row = $result->fetch_assoc();
$total_rooms = $row['total_rooms'];
$stmt->close();

// Step 2: Count booked rooms for overlapping dates
$check_stmt = $mycon->prepare("
    SELECT COUNT(*) AS booked_count FROM bookings 
    WHERE room = ? AND NOT (check_out <= ? OR check_in >= ?)
");
$check_stmt->bind_param("sss", $room_type, $check_in, $check_out);
$check_stmt->execute();
$check_result = $check_stmt->get_result();
$booked_data = $check_result->fetch_assoc();
$booked_count = $booked_data['booked_count'];
$check_stmt->close();

// Step 3: Check availability
if ($booked_count >= $total_rooms) {
    echo "<script>alert('Sorry, no $room_type rooms available for the selected dates.');</script>";
    exit;
  
}


// Step 4: Insert booking
$sql = "INSERT INTO bookings (name, email, check_in, check_out, room) VALUES (?, ?, ?, ?, ?)";
$ps = $mycon->prepare($sql);
$ps->bind_param("sssss", $name, $email, $check_in, $check_out, $room_type);

if ($ps->execute()) {
    echo "<script>alert('Booking successful!'); window.location.href = 'index.html';</script>";
} else {
    echo "Error: " . $ps->error;
}

$ps->close();
$mycon->close();

?>
