<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
    <style>
        .container {
            font-family: 'Kanit', sans-serif;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #DCC22F;
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
            background-color: #F4DFBE;
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


        .rekening-info {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .rekening-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
            text-align: center;
        }

        .rekening-info p {
            margin-bottom: 5px;
            font-size: 16px;
            text-align: center;
        }



        .input-file {
            display: inline-block;
            position: relative;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 3px;
            background-color: #fff;
            color: #555;
            padding: 8px 12px;
            cursor: pointer;
            width: 100%; 
        }


        .input-file input[type="file"] {
            position: absolute;
            font-size: 100px;
            opacity: 0;
            right: 0;
            top: 0;
            cursor: pointer;
            height: 100%;
            width: 100%;
        }

      
        .input-file span {
            margin-left: 10px;
            font-size: 14px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: calc(100% - 40px);
        }
    </style>
</head>

<body>
    <h2 class="text-center mt-5 mb-5">Support</h2>

    <div class="container grid-rows-2 gap-4 ">
        <div class="bg-sky-500/50">1</div>
        <div class="bg-red-500/50">2</div>
    </div>



    <div class="container grid-rows-2 gap-4">
        <form action="{{ route('supporter.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- INI DIV YG ATAS -->
            <div class="grid grid-cols-2 gap-4">
                <div class="grid grid-rows-6 gap-4">
                    <div class="form-group">
                        @error('nama')
                        <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                        @error('email')
                        <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        @error('alamat')
                        <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <label for="alamat">Alamat:</label>
                        <textarea name="alamat">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                        @error('no_telepon')
                        <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}">
                    </div>

                    <div class="form-group">
                        <label for="bentuk_donasi">Bentuk Donasi:</label>
                        <select name="bentuk_donasi">
                            <option value="uang_tunai">Uang Tunai</option>
                            <option value="barang">Barang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        @error('bukti_transfer')
                        <span style="color: red;">{{ $message }}</span>
                        @enderror
                        <label for="bukti_transfer" class="input-file">
                            <span>Choose File</span>
                            <input type="file" name="bukti_transfer" id="input-file">
                        </label>
                    </div>
                </div>

                <div class="rekening-info">
                    <h3>Nomor Rekening untuk Donasi:</h3>
                    <p>096301047892539 - Bank BRI</p>
                    <p>Rumah Belajar Covenant</p>
                </div>

            </div>



            <!-- INI DIV YG BAWAH -->
            <div>
                <div class="form-group">
                    <label for="keterangan">Pesan/Keterangan:</label>
                    <textarea name="keterangan">{{ old('keterangan') }}</textarea>
                </div>
            </div>

            <!-- <div class="form-group">
                @error('agree')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">Saya setuju bahwa data yang saya berikan diatas akan digunakan untuk tujuan donasi ini.</label>
            </div> -->

            <div class="form-group flex items-center mb-4">
                @error('agree')
                <span style="color: red;">{{ $message }}</span>
                @enderror
                <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('input-file').addEventListener('change', function() {
            let fileName = this.value.split('\\').pop();
            let label = document.querySelector('.input-file span');
            label.textContent = fileName;
        });
    </script>
</body>

</html>