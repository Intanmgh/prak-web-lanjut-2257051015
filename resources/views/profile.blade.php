<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #D2E0FB; /* Warna background biru lembut */
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            background-color: #FEF9D9; /* Background kuning muda untuk kotak profil */
            padding: 40px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Untuk menempatkan gambar di tengah */
            color: #333; /* Warna teks lebih gelap agar mudah dibaca */
        }
        .profile-img {
            width: 150px; /* Ukuran gambar */
            height: 150px; /* Ukuran gambar */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Gambar tetap proporsional */
            margin-bottom: 20px; /* Jarak antara gambar dan konten lainnya */
        }
        .info-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Menyelaraskan inputan di kiri */
            width: 100%; /* Memastikan konten info mengambil lebar penuh */
        }
        .info {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #8EACCD; /* Warna kotak info */
            color: white;
            border-radius: 50px;
            padding: 10px 20px; 
            margin-bottom: 10px; /* Jarak antar kotak info */
            width: 100%; /* Membuat info melebar sepenuhnya */
            font-size: 16px; /* Ukuran font yang lebih mudah dibaca */
        }
        .info .label {
            font-weight: bold; /* Menebalkan label */
            margin-right: 10px; /* Jarak antara label dan value */
            width: 70px; /* Lebar tetap untuk label agar rata */
        }
        .info .value {
            text-align: left; /* Menyelaraskan teks di sebelah kiri */
            flex-grow: 1; /* Membuat nilai mengambil sisa ruang */
        }
    </style>
</head>

<body>

    <div class="card">
        <img src="../{{ $user->foto }}" class="profile-img" alt="Foto Profil"> <!-- Menggunakan class "profile-img" untuk membuat foto bulat -->
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama :</p>
            <p class="value">{{$user->nama }}</p> <!-- Proper width for name field -->
        </div>
        <div class="info">
            <p class="label">NPM :</p>
            <p class="value">{{ $user->npm }}</p> <!-- Proper width for NPM -->
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p> <!-- Proper width for class -->
        </div>
    </div>

</body>
</html>
