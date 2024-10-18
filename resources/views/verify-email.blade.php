<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoSoul - {{ $title }}</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <h1>Please Verify Your Email</h1>
            <p>{{ $user }}</p>
            <p>Click the button below to receive a verification code via email.</p>

            <!-- Button to send verification code -->
            <form id="get-code-form" action="{{ url('/send-verification-code') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" id="get-code-btn">Get Code</button>
            </form>

            <!-- Verification form (hidden initially) -->
            <form id="verify-form" action="{{ url('/verify-code') }}" method="POST"
                style="display:none; margin-top: 20px;">
                @csrf
                <div class="form-group">
                    <label for="verification_code">Enter Verification Code</label>
                    <input type="text" class="form-control" id="verification_code" name="verification_code" required>
                </div>
                <button type="submit" class="btn btn-success mt-3">Verify Now</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // When the Get Code button is clicked, show the verification form
            $('#get-code-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#get-code-btn').hide(); // Hide the Get Code button
                        $('#verify-form').show(); // Show the verification form
                        alert(response.message); // Show a success message
                    },
                    error: function(response) {
                        alert('Error: ' + response.responseJSON.message); // Show error message
                    }
                });
            });
        });
    </script>
</body>

<!-- Footer -->
@include('components.footer')

</html>
