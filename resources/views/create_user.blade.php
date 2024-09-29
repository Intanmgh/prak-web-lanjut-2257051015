<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User </title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #D2E0FB; /* Background utama */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #FEF9D9; /* Warna latar belakang form */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            border: 5px solid #8EACCD; /* Warna border form */
        }
        h1 {
            text-align: center;
            color: #FF4081;
            margin-bottom: 20px;
            font-size: 24px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #8EACCD; /* Warna label */
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #FFCCBC;
            border-radius: 10px;
            box-sizing: border-box;
            font-family: 'Comic Sans MS', cursive;
            font-size: 16px;
            background-color: #FFF3E0;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #FF4081;
            box-shadow: 0 0 8px rgba(255, 64, 129, 0.4);
        }
        input[type="submit"] {
            background-color: #FF80AB;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #FF4081;
        }
        .form-container::before {
            content: "🌸";
            font-size: 40px;
            display: block;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form User</h1>
        <form action="{{ route('user.store') }}" method="POST"> 
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
            
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM">
            
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas">
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
