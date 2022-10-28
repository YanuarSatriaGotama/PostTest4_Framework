<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Tambah Data Saham</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

        

    <div class="container mt">
        <form action="/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Kode</label>

                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang"
                    placeholder="nama_barang " required>

                @error('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="harga " required>
            @error('harga')<div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">jenis</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" placeholder="jenis" required>

                @error('Sjenisaham')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Nama Karyawan</label>
                <select name="karyawan_id" id="karyawan_id" class="form-select @error('karyawan_id') is-invalid @enderror" aria-label="Default select example">
                    <option value="" selected disabled>Choose Volume</option>
                    @foreach ($karyawans as $k)
                        <option value={{ $k->id }}>{{ $k->nama }}</option>
                    @endforeach
                </select>

                @error('karyawan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</body>
</html>