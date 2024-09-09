<!DOCTYPE html>
<html>

<head>
    <title>Laporan Presensi</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap");

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px 12px;
            border: 1px solid #000;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Laporan Presensi</h1>

    @foreach ($events as $event)
        <h2>{{ $event->nama_event }} - {{ $event->tanggal }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Member</th>
                    <th>Status Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event->presensis as $presensi)
                    <tr>
                        <td>{{ $presensi->user->name }}</td>
                        <td>{{ $presensi->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    @endforeach
</body>

</html>
