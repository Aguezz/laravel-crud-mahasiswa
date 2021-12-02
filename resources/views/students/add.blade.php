<html>
    <head>
        <title>Laravel CRUD Mahasiswa</title>
    </head>
    <body>
        <h3>Tambah mahasiswa</h3>

        <form action="" method="POST">
            @csrf

            <div>
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM" required>
            </div>

            <div>
                <label>Nama</label>
                <input type="text" name="name" placeholder="Masukkan nama mahasiswa" required>
            </div>

            <div>
                <button type="submit">Simpan</button>
                <a href="/">Kembali</a>
            </div>
        </form>
    </body>
</html>
