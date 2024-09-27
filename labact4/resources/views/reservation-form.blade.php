<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Reservation Form</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            <h2 class="mt-4">Guest Information</h2>
            <div class="form-group row">
                <label for="full_name" class="col-md-12">Full Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email@sample.com" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" class="form-control" name="contact_number" value="{{ old('contact_number') }}" placeholder="09xxxxxxxxx" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Street, City, Province, Country" required>
            </div>

            <h2 class="mt-4">Room Reservation</h2>
            <div class="form-group">
                <label for="check_in_date">Check-in Date</label>
                <input type="date" class="form-control" name="check_in_date" value="{{ old('check_in_date') }}" required>
            </div>

            <div class="form-group">
                <label>Room Preferences:</label>
                <div class="d-flex">
                    <div class="form-check me-3">
                        <input type="radio" class="form-check-input" id="room_standard" name="room_preferences" value="Standard" required>
                        <label class="form-check-label" for="room_standard">Standard - 1,500</label>
                    </div>
                    <div class="form-check me-3">
                        <input type="radio" class="form-check-input" id="room_deluxe" name="room_preferences" value="Deluxe" required>
                        <label class="form-check-label" for="room_deluxe">Deluxe - 3,000</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="room_suite" name="room_preferences" value="Suite" required>
                        <label class="form-check-label" for="room_suite">Suite - 4,500</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="number_of_days">No. of Days:</label>
                <input type="number" class="form-control" name="number_of_days" value="{{ old('number_of_days') }}" min="1" required>
            </div>

            <div class="form-group">
                <label for="number_of_guests">No. of Guests:</label>
                <input type="number" class="form-control" name="number_of_guests" value="{{ old('number_of_guests') }}" min="1" required>
            </div>

            <div class="form-group">
                <label for="special_request">Special Request:</label>
                <textarea class="form-control" name="special_request">{{ old('special_request') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
