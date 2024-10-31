<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Edit Reservasi</h1>
                <form action="{{ route('admin.reservasis.update', $reservasi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="tamu_id" class="form-label">Tamu</label>
                        <select class="form-control" id="tamu_id" name="tamu_id" required>
                            @foreach($tamus as $tamu)
                                <option value="{{ $tamu->id }}" {{ $tamu->id == $reservasi->tamu_id ? 'selected' : '' }}>{{ $tamu->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kamar_id" class="form-label">Kamar</label>
                        <select class="form-control" id="kamar_id" name="kamar_id" required>
                            @foreach($kamars as $kamar)
                                <option value="{{ $kamar->id }}" {{ $kamar->id == $reservasi->kamar_id ? 'selected' : '' }}>{{ $kamar->nomor_kamar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_checkin" class="form-label">Tanggal Check-in</label>
                        <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" value="{{ $reservasi->tanggal_checkin }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_checkout" class="form-label">Tanggal Check-out</label>
                        <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" value="{{ $reservasi->tanggal_checkout }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
