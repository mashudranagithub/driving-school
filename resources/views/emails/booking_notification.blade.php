<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>New Booking Received</title>
</head>
<body>
<h1>New Booking Received</h1>
<p><strong>Name:</strong> {{ $booking->name }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone }}</p>
<p><strong>Postcode:</strong> {{ $booking->postcode }}</p>
<p><strong>Previous Lessons:</strong> {{ $booking->previous_lessons }}</p>
<p><strong>Theory Test:</strong> {{ $booking->theory_test }}</p>
<p><strong>Transmission:</strong> {{ $booking->transmission }}</p>
<p><strong>Message:</strong> {{ $booking->message }}</p>
</body>
</html>
