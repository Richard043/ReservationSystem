<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $hotel->nama_hotel }} - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .room-list-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            padding: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .room-list-item:hover {
            background-color: #f8f9fa;
            transform: translateY(-5px);
        }
        .room-info {
            display: flex;
            align-items: center;
        }
        .room-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #0d6efd;
        }
        .room-details {
            flex: 1;
        }
        .badge {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1>{{ $hotel->nama_hotel }}</h1>
                <p>{{ $hotel->lokasi }}</p>
                <h2 class="mt-4">Available Rooms</h2>
                <ul class="list-group">
                    @foreach($hotel->kamars as $kamar)
                        <li class="list-group-item room-list-item">
                            <div class="room-info">
                                <i class="fas fa-bed room-icon"></i>
                                <div class="room-details">
                                    <a href="{{ route('kamars.show', $kamar->id) }}" class="text-decoration-none text-dark">
                                        <strong>Room {{ $kamar->nomor_kamar }}</strong> - {{ $kamar->tipe_kamar }}
                                    </a>
                                </div>
                            </div>
                            <span class="badge bg-primary text-white p-2">Rp {{ $kamar->harga }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
