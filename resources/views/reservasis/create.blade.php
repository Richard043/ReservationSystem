<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Make a Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .reservation-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 30px;
        }
        .reservation-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .room-summary {
            font-size: 1.1rem;
            color: #6c757d;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .room-summary i {
            margin-right: 10px;
            color: #0d6efd;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-reserve {
            font-size: 1.1rem;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card reservation-card">
            <div class="card-body">
                <div class="reservation-header">
                    <h1>Make a Reservation</h1>
                </div>
                <div class="room-summary">
                    <i class="fas fa-bed"></i>
                    Room: {{ $kamar->nomor_kamar }} - {{ $kamar->tipe_kamar }} - Rp {{ $kamar->harga }}
                </div>
                <form action="{{ route('reservasis.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kamar_id" value="{{ $kamar->id }}">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_checkin" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_checkout" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" required>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-reserve"><i class="fas fa-calendar-check me-2"></i>Reserve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
