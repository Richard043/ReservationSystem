<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .hero {
            background: url('https://images7.alphacoders.com/362/thumb-1920-362619.jpg') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px #000;
            position: relative;
            overflow: hidden;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }
        .hero-content h1 {
            font-size: 3.5rem;
        }
        .hero-content .btn {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 1.1rem;
            font-weight: bold;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            background-color: #fff;
            border-radius: 15px;
            padding: 40px;
        }
        .list-group-item {
            border: none;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            padding: 15px;
        }
        .list-group-item:hover {
            background-color: #e2e6ea;
            transform: translateY(-5px);
        }
        .admin-link {
            margin-top: 30px;
            text-align: center;
        }
        .admin-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .admin-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-3">Welcome to Our Hotel Reservation System</h1>
            <p class="lead">Find your perfect stay with ease</p>
        </div>
    </div>
    <div class="container" id="services">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="mb-4">Our Featured Hotels</h1>
                <div class="list-group">
                    @foreach($hotels as $hotel)
                        <a href="{{ url('/hotels/' . $hotel->id) }}" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-hotel me-3 text-primary" style="font-size: 1.5rem;"></i>
                            <span class="text-primary">{{ $hotel->nama_hotel }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="admin-link">
            <a href="{{ url('/admin') }}">Admin Panel</a>
        </div>
    </div>
</body>
</html>
