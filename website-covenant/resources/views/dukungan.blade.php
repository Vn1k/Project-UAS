<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }

        textarea {
            resize: vertical;
        }

        .form-group {
            margin-bottom: 15px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-5">Support</h2>
        <form action="{{ route('supporters.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="no_telepon">Nomor Telepon:</label>
                <input type="text" name="no_telepon" value="{{ old('no_telepon') }}">
                @error('no_telepon')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Other form fields -->
            <div class="form-group">
                <label for="bentuk_donasi">Bentuk Donasi:</label>
                <select name="bentuk_donasi">
                    <option value="uang_tunai">Uang Tunai</option>
                    <option value="barang">Barang</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bukti_transfer">Bukti Transfer:</label>
                <input type="file" name="bukti_transfer">
                @error('bukti_transfer')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="keterangan">Pesan/Keterangan:</label>
                <textarea name="keterangan">{{ old('keterangan') }}</textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">Saya setuju bahwa data yang saya berikan diatas akan digunakan untuk tujuan donasi ini.</label>
                @error('agree')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>