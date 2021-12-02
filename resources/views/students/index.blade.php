<html>
    <head>
        <title>Laravel CRUD Mahasiswa</title>
    </head>
    <body>
        <h3>List Mahasiswa</h3>

        <a href="/add">Tambah mahasiswa</a>

        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <a href="/edit/{{ $student->id }}">Edit</a>
                        <a href="/delete/{{ $student->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
