<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD LARAVEL</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/tambah">+ Tambah Mahasiswa Baru</a>
    <br>
    
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs-> Nim }}</td>
            <td>{{ $mhs-> Nama}}</td>
            <td>{{ $mhs-> Semester }}</td>
            <td>
                <a href="/mahasiswa/edit/{{$mhs->Nim}}">Edit</a>
                |
                <a href="/mahasiswa/hapus/{{$mhs->Nim}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>