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
        }
        .profile-container {
            background-color: #FEF9D9; /* Background kuning muda untuk kotak profil */
            padding: 40px; 
            border-radius: 10px;
            max-width: 400px; /* Atur lebar maksimal */
            width: 100%; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            text-align: center;
        }
        .profile-img {
            width: 150px; /* Ukuran gambar */
            height: 150px; /* Ukuran gambar */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Gambar tetap proporsional */
            margin-bottom: 20px; /* Jarak antara gambar dan teks */
        }
        .info-box {
            background-color: #8EACCD; /* Warna biru untuk kotak info */
            color: white; /* Warna teks putih */
            border-radius: 50px; /* Membuat sudut menjadi lonjong */
            padding: 10px 0; /* Jarak vertikal dalam kotak */
            margin-bottom: 10px; /* Jarak antar kotak */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img class="profile-img" src="https://img.wattpad.com/4c907674db67ecca4a4872c3a1b34189d02be019/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f41307458744761675a782d6235413d3d2d32372e313566373433336662316539363430303737363237343032353137392e6a7067" alt="Foto Profil">
        <div class="info-box">
            Intan Maghfirah
        </div>
        <div class="info-box">
            B
        </div>
        <div class="info-box">
            2257051015
        </div>
    </div>
</body>
</html>
