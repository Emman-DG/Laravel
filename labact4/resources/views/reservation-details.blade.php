<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Reservation Details</h1>

        <h2>Guest Information</h2>
        <p><strong>Full Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Contact Number:</strong> {{ $data['contact_number'] }}</p>
        <p><strong>Address:</strong> {{ $data['address'] }}</p>

        <h2>Room Reservation</h2>
        <p><strong>Check-in Date:</strong> {{ $data['check_in_date'] }}</p>
        <p><strong>Room Preferences:</strong> {{ $data['room_preferences'] }}</p>
        <p><strong>Number of Days:</strong> {{ $data['number_of_days'] }}</p>
        <p><strong>Number of Guests:</strong> {{ $data['number_of_guests'] }}</p>
        <p><strong>Special Request:</strong> {{ $data['special_request'] }}</p>
        <p><strong>Total Room Price:</strong> {{ $totalRoomPrice }}</p>

        <form action="{{ route('reservation.form') }}" method="GET" class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Create Another Reservation</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
