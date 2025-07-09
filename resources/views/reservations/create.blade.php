<!DOCTYPE html>
<html>
<head>
    <title>Tambah Reservasi</title>
</head>
<body>
    <h2>Form Tambah Reservasi Hotel</h2>

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <label>Nama Tamu:</label><br>
        <input type="text" name="nama_tamu"><br><br>

        <label>Nomor Kamar:</label><br>
        <input type="text" name="nomer_kamar"><br><br>

        <label>Check-in:</label><br>
        <input type="date" name="check_in"><br><br>

        <label>Check-out:</label><br>
        <input type="date" name="check_out"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Reserved">Reserved</option>
            <option value="Checked-in">Checked-in</option>
            <option value="Checked-out">Checked-out</option>
        </select><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('reservations.index') }}">Batal</a>
    </form>
</body>
</html>
