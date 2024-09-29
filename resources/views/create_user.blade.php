<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #cfe2f3; /* Background lebih lembut */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #fff5db;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .form-container img {
            width: 150px; /* Lebar gambar diperbesar */
            height: 150px; /* Tinggi gambar diperbesar */
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h2 {
            color: #ff69b4;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-top: 10px;
            text-align: left;
            color: #333;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 14px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        .text-danger {
            color: #ff0000;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/25/artikel-19-2527896376.png" alt="Foto Profil">
        <h2>Form User</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
            @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM">
            @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id">
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
