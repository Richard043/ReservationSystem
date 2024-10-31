<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Reservasi Details</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Tamu</th>
                        <td>{{ $reservasi->tamu->nama }}</td>
                    </tr>
                    <tr>
                        <th>Hotel</th>
                        <td>{{ $reservasi->kamar->hotel->nama_hotel }}</td>
                    </tr>
                    <tr>
                        <th>Kamar</th>
                        <td>{{ $reservasi->kamar->nomor_kamar }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Check-in</th>
                        <td>{{ $reservasi->tanggal_checkin }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Check-out</th>
                        <td>{{ $reservasi->tanggal_checkout }}</td>
                    </tr>
                </table>
                <a href="{{ route('admin.reservasis.index') }}" class="btn btn-secondary mt-3">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
