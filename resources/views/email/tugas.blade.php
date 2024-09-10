<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Tugas Baru</title>
</head>
<body>
    <h1>Notifikasi Tugas Baru</h1>
    <p>Hai,</p>
    <p>Anda memiliki tugas baru yang perlu diperhatikan.</p>

    <p><strong>Pengumuman:</strong> {{ $announcement }}</p>

    <p><strong>Judul Tugas:</strong> {{ $task->judul_tugas }}</p>
    <p><strong>Tanggal:</strong> {{ $task->tanggal }}</p>

    <p>Silakan <a href="{{ route('login') }}">login</a> untuk melihat detail tugas lebih lanjut.</p>

    <p>Terima kasih!</p>
</body>
</html>
