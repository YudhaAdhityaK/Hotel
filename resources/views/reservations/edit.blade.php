<!DOCTYPE html>
<html>
<head>
    <title>Edit Reservasi</title>
</head>
<body>
    <h2>Edit Data Reservasi</h2>

    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Tamu:</label><br>
        <input type="text" name="nama_tamu" value="{{ $reservation->nama_tamu }}"><br><br>

        <label>Nomor Kamar:</label><br>
        <input type="text" name="nomer_kamar" value="{{ $reservation->nomer_kamar }}"><br><br>

        <label>Check-in:</label><br>
        <input type="date" name="check_in" value="{{ $reservation->check_in }}"><br><br>

        <label>Check-out:</label><br>
        <input type="date" name="check_out" value="{{ $reservation->check_out }}"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Reserved" {{ $reservation->status == 'Reserved' ? 'selected' : '' }}>Reserved</option>
            <option value="Checked-in" {{ $reservation->status == 'Checked-in' ? 'selected' : '' }}>Checked-in</option>
            <option value="Checked-out" {{ $reservation->status == 'Checked-out' ? 'selected' : '' }}>Checked-out</option>
        </select><br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('reservations.index') }}">Batal</a>
    </form>
</body>
</html>
