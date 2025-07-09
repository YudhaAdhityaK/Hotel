<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi Hotel</title>
</head>
<body>
    <h1>Data Reservasi Hotel</h1>

    <a href="{{ route('reservations.create') }}">Tambah Data</a>
    <a href="{{ route('reservations.exportPdf') }}">Export PDF</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>Kamar</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach($reservations as $r)
        <tr>
            <td>{{ $r->nama_tamu }}</td>
            <td>{{ $r->nomer_kamar }}</td>
            <td>{{ $r->check_in }}</td>
            <td>{{ $r->check_out }}</td>
            <td>{{ $r->status }}</td>
            <td>
                <a href="{{ route('reservations.edit', $r->id) }}">Edit</a>
                <form action="{{ route('reservations.destroy', $r->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
