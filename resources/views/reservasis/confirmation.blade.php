<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .confirmation-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }
        .confirmation-icon {
            font-size: 4rem;
            color: #198754;
            margin-bottom: 20px;
        }
        .confirmation-message {
            font-size: 1.5rem;
            color: #6c757d;
        }
        .btn-home {
            font-size: 1.1rem;
            padding: 10px 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card confirmation-card">
            <div class="card-body">
                <i class="fas fa-check-circle confirmation-icon"></i>
                <h1 class="mb-4">Your Reservation is Complete!</h1>
                <p class="confirmation-message">Thank you for your reservation. We look forward to welcoming you and ensuring a pleasant stay.</p>
                <a href="{{ url('/') }}" class="btn btn-primary btn-home"><i class="fas fa-home me-2"></i>Back to Home Page</a>
            </div>
        </div>
    </div>
</body>
</html>
