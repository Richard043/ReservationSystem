<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: url('https://gitgogroup.com/wp-content/uploads/2023/09/hotels_future.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
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
        .content {
            margin-left: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.85);
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 900px;
            width: 100%;
            color: #333;
        }
        .table th, .table td {
            font-weight: bold;
            color: #333;
        }
        .btn-info, .btn-warning, .btn-danger {
            color: #ffffff !important;
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
            <h1 class="text-center mb-4">Manage Profiles</h1>
            <a href="{{ route('admin.profiles.create') }}" class="btn btn-primary mb-3">Add New Profile</a>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tamu</th>
                        <th>Bio</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->tamu->nama }}</td>
                        <td>{{ $profile->bio }}</td>
                        <td>
                            <a href="{{ route('admin.profiles.show', $profile->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
