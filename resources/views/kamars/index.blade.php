<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation System : Kamars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center my-4">Reservation System : Kamars (One to Many)</h5>
                <table class="table table-bordered table-striped">
                    <thead class="table-success">
                        <tr>
                            <th>Nomor Kamar</th>
                            <th>Tipe Kamar</th>
                            <th>Harga</th>
                            <th>Hotel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kamars as $kamar)
                        <tr>
                            <td>{{ $kamar->nomor_kamar }}</td>
                            <td>{{ $kamar->tipe_kamar }}</td>
                            <td>{{ $kamar->harga }}</td>
                            <td>{{ $kamar->hotel->nama_hotel }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
