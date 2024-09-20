<!DOCTYPE html>
<html>

<head>
    <title>Laporan Nilai Akhir</title>
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
    <h1>Laporan Nilai Akhir </h1>
        <h2>{{ $event->nama_event }}</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Ekstrakulikuler</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $item)
                @php
                    $nilai = $nilaiData->firstWhere('user_id', $item->id);
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->Extracurricular->nama_eskul }}</td>
                    <td>{{ $nilai->nilai_akhir }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br><br>
</body>

</html>

