<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">Edit Profile</h1>
                <form action="{{ route('admin.profiles.update', $profile->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="tamu_id" class="form-label">Tamu</label>
                        <select class="form-control" id="tamu_id" name="tamu_id" required>
                            @foreach($tamus as $tamu)
                                <option value="{{ $tamu->id }}" {{ $tamu->id == $profile->tamu_id ? 'selected' : '' }}>{{ $tamu->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" value="{{ $profile->bio }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
