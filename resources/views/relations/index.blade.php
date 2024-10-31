<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Relation View Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: url('https://gitgogroup.com/wp-content/uploads/2023/09/hotels_future.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }
        /* Sidebar styling */
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: rgba(0, 0, 0, 0.8);
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
            background-color: #6c757d;
        }
        /* Main content styling */
        .content-container {
            margin-left: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.75);
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            color: #ffffff;
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .card h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1rem;
            margin: 8px 0;
            padding: 12px 15px;
            transition: background-color 0.3s ease;
        }
        .list-group-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h4>Admin Dashboard</h4>
        <div class="list-group list-group-flush">
            <a href="{{ url('/admin/hotels') }}" class="list-group-item list-group-item-action">Manage Hotels</a>
            <a href="{{ url('/admin/kamars') }}" class="list-group-item list-group-item-action">Manage Kamars</a>
            <a href="{{ url('/admin/tamus') }}" class="list-group-item list-group-item-action">Manage Tamus</a>
            <a href="{{ url('/admin/reservasis') }}" class="list-group-item list-group-item-action">Manage Reservasis</a>
            <a href="{{ url('/admin/profiles') }}" class="list-group-item list-group-item-action">Manage Profiles</a>
            <a href="{{ url('/relations') }}" class="list-group-item list-group-item-action mt-4">View Relations</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-container">
        <div class="card">
            <h1>Welcome to the Relation View Center</h1>
            <div class="list-group">
                <a href="{{ url('/relations/hotels') }}" class="list-group-item list-group-item-action bg-primary text-white">Hotels</a>
                <a href="{{ url('/relations/kamars') }}" class="list-group-item list-group-item-action bg-success text-white">Kamars</a>
                <a href="{{ url('/relations/tamus') }}" class="list-group-item list-group-item-action bg-info text-white">Tamus</a>
                <a href="{{ url('/relations/reservasis') }}" class="list-group-item list-group-item-action bg-warning text-white">Reservasis</a>
                <a href="{{ url('/relations/profiles') }}" class="list-group-item list-group-item-action bg-danger text-white">Profiles</a>
            </div>
        </div>
    </div>
</body>
</html>