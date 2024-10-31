<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Profile Details</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Tamu</th>
                        <td>{{ $profile->tamu->nama }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $profile->tamu->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $profile->tamu->telepon }}</td>
                    </tr>
                    <tr>
                        <th>Bio</th>
                        <td>{{ $profile->bio }}</td>
                    </tr>
                </table>
                <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary mt-3">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
