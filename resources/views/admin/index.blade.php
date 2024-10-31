<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: url('https://gitgogroup.com/wp-content/uploads/2023/09/hotels_future.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: rgba(0, 0, 0, 0.8); /* Darker semi-transparent black */
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar h4 {
            color: #f8f9fa;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .sidebar .list-group-item {
            background-color: transparent;
            border: none;
            color: #ffffff;
            font-size: 1.1rem;
            padding: 15px 20px;
            transition: background-color 0.3s ease;
        }
        .sidebar .list-group-item:hover {
            background-color: #6c757d; /* Dark gray on hover */
        }
        .content {
            margin-left: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.75); /* Dark semi-transparent overlay */
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            color: #ffffff;
            padding: 40px;
            text-align: center;
            max-width: 600px;
        }
        .card h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Admin Dashboard</h4>
        <div class="list-group list-group-flush">
            <a href="{{ route('admin.hotels.index') }}" class="list-group-item list-group-item-action">Manage Hotels</a>
            <a href="{{ route('admin.kamars.index') }}" class="list-group-item list-group-item-action">Manage Kamars</a>
            <a href="{{ route('admin.tamus.index') }}" class="list-group-item list-group-item-action">Manage Tamus</a>
            <a href="{{ route('admin.reservasis.index') }}" class="list-group-item list-group-item-action">Manage Reservasis</a>
            <a href="{{ route('admin.profiles.index') }}" class="list-group-item list-group-item-action">Manage Profiles</a>
            <a href="{{ url('/relations') }}" class="list-group-item list-group-item-action mt-4">View Relations</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="card">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Navigate through the sidebar to manage hotels, rooms, guests, reservations, and profiles.</p>
        </div>
    </div>

</body>
</html>
