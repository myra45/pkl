<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Halaman Penilian</title>
</head>
<body>
    <h1>Notifikasi Halaman Penilian</h1>
    <p>Hai,</p>
    <p>Sekarang Halaman penilian telah tersedia!</p>

    <p><strong>Pengumuman:</strong> {{ $announcement }}</p>

    <p><strong>Nama Event:</strong> {{ $event_penilaian->nama_event }}</p>
    <p><strong>Tanggal:</strong> {{ $event_penilaian->tanggal }}</p>

    <p>Silakan <a href="{{ route('admin_login') }}">login</a> untuk menginput nilai setiap member eskul.</p>

    <p>Terima kasih!</p>
</body>
</html>

