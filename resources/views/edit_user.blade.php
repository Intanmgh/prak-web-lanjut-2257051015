@extends('layouts.app')

@section('content')
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

        .form-container {
            background-color: #FEF9D9; /* Background kuning muda untuk kotak formulir */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%; 
            text-align: center;
        }

        .form-container img {
            width: 100px; /* Ukuran gambar */
            height: 100px; /* Ukuran gambar */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            margin-bottom: 20px; /* Jarak antara gambar dan konten lainnya */
        }

        h2 {
            color: #ff69b4; /* Warna judul */
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-top: 10px;
            text-align: left;
            color: #333; /* Warna label */
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

        input[type="submit"], button {
            background-color: #ff69b4; /* Warna tombol submit */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #ff1493; /* Warna saat hover */
        }

        .text-danger {
            color: #ff0000; /* Warna untuk pesan error */
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>

    <div class="form-container">
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h2>Edit Data User</h2>

            <!-- Input Nama -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <!-- Input NPM -->
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}">
            @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <!-- Input Kelas -->
            <label for="kelas">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>

            <!-- Input Foto -->
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto"><br><br>
            @if($user->foto)
                <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="User Image">
            @endif

            <br><br>

            <!-- Submit Button -->
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
