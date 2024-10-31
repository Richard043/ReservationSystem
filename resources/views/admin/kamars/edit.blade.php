<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Edit Kamar</h1>
                <form action="{{ route('admin.kamars.update', $kamar->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nomor_kamar" class="form-label">Nomor Kamar</label>
                        <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" value="{{ $kamar->nomor_kamar }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $kamar->harga }}" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="hotel_id" class="form-label">Hotel</label>
                        <select class="form-control" id="hotel_id" name="hotel_id" required>
                            @foreach($hotels as $hotel)
                                <option value="{{ $hotel->id }}" {{ $hotel->id == $kamar->hotel_id ? 'selected' : '' }}>{{ $hotel->nama_hotel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
