<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room {{ $kamar->nomor_kamar }} - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .room-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-body {
            padding: 30px;
        }
        .room-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .room-detail {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        .room-icon {
            margin-right: 10px;
            color: #0d6efd;
        }
        .price-badge {
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            background-color: #198754;
            border-radius: 8px;
            padding: 8px 15px;
            display: inline-block;
        }
        .btn-reserve {
            font-size: 1.1rem;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card room-card">
            <div class="card-body text-center">
                <h1 class="room-title">Room {{ $kamar->nomor_kamar }}</h1>
                <p class="room-detail">
                    <i class="fas fa-door-open room-icon"></i> Type: {{ $kamar->tipe_kamar }}
                </p>
                <p class="price-badge">
                    Rp {{ $kamar->harga }}
                </p>
                <div class="mt-4">
                    <a href="{{ route('reservasis.create', ['room_id' => $kamar->id]) }}" class="btn btn-primary btn-reserve">
                        <i class="fas fa-calendar-check me-2"></i>Reserve This Room
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
