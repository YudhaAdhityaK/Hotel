<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi Hotel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 6px;
        }
    </style>
</head>
<body>
    <h2>Data Reservasi Hotel</h2>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kamar</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $r)
            <tr>
                <td>{{ $r->nama_tamu }}</td>
                <td>{{ $r->nomer_kamar }}</td>
                <td>{{ $r->check_in }}</td>
                <td>{{ $r->check_out }}</td>
                <td>{{ $r->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
