<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Kamar Details</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor Kamar</th>
                        <td>{{ $kamar->nomor_kamar }}</td>
                    </tr>
                    <tr>
                        <th>Tipe Kamar</th>
                        <td>{{ $kamar->tipe_kamar }}</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>{{ $kamar->harga }}</td>
                    </tr>
                    <tr>
                        <th>Hotel</th>
                        <td>{{ $kamar->hotel->nama_hotel }}</td>
                    </tr>
                </table>
                <a href="{{ route('admin.kamars.index') }}" class="btn btn-secondary mt-3">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
