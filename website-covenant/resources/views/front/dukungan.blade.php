@vite(['resources/css/app.css','resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <style>
        /* body {
            background: rgb(168, 165, 141);
            background: -moz-linear-gradient(74deg, rgba(168, 165, 141, 1) 0%, rgba(217, 213, 184, 1) 83%);
            background: -webkit-linear-gradient(74deg, rgba(168, 165, 141, 1) 0%, rgba(217, 213, 184, 1) 83%);
            background: linear-gradient(74deg, rgba(168, 165, 141, 1) 0%, rgba(217, 213, 184, 1) 83%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a8a58d", endColorstr="#d9d5b8", GradientType=1);
        } */

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
    @extends('layouts.appUser')
    @section('content')


    <div class="w-screen font-kanit mt-24 px-10">
        <h1 class="text-xl lg:text-3xl font-bold py-10 text-center">Dukungan</h1>
        <!-- ERROR CHECK -->
        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-center text-xl text-red-800 rounded-lg">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <!-- ------------ -->
        <form action="{{ route('proses_dukungan') }}" method="POST" enctype="multipart/form-data" class="max-w-7xl mx-auto p-5 rounded">
            @csrf
            <div class="grid md:grid-cols-2 md:gap-6 ">
                <!-- Left Column -->
                <div class="md:col-span-1 my-3.5 font-kanit">
                    <div class="content-left-cols shadow-lg rounded p-8 h-full bg-butek">
                        <h2 class="text-2xl font-bold relative z-0 w-full mb-5 group">Informasi Dukungan</h2>
                        <div class="relative z-0 w-full group">
                            <h3>Nomor Rekening untuk Donasi:</h3>
                            <p>096301047892539 - Bank BRI</p>
                            <p>A.N Jessica Laura Sidabutar</p>
                            <br>
                            <p>6860302487 - Bank BCA</p>
                            <p>A.N Jessica Laura Sidabutar</p>                            
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="md:col-span-1 ">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="nama" value="{{ old('nama') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                        <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" value="{{ old('email') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="alamat" value="{{ old('alamat') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                        <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                        <label for="no_telepon" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Telepon</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="bentuk_donasi" class="sr-only">Bentuk Donasi</label>
                        <select name="bentuk_donasi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                            <option selected>Donasi</option>
                            <option value="uang_tunai">Uang Tunai</option>
                            <option value="barang">Barang</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="keterangan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                <label for="keterangan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
            </div>

            <div>
                <label for="bukti_transfer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Bukti Transfer / Barang</label>
                <input name="bukti_transfer" id="input-file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 my-2.5" type="file" name="photo" placeholder="Upload Foto" aria-describedby="user_avatar_help" id="user_avatar" required>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPEG, PNG, JPG (MAX. 10MB).</p>
            </div>

            <div class="relative z-0 w-full mt-2 mb-2 group">
                <input id="checkbox-1" type="checkbox" name="agree" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    <span class="text-justify">Saya setuju untuk memberikan data pribadi saya untuk keperluan donasi Rumah Belajar Covenant, dan saya percaya bahwa data ini akan digunakan secara bertanggung jawab oleh pihak terkait.</span>
                </label>
            </div>

            <input type="text" name="honeypot" style="display:none;">


            <button type="submit" class="text-black bg-third hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-5 py-2.5 text-center  dark:bg-third dark:hover:bg-utama dark:focus:ring-blue-800 mt-5">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('input-file').addEventListener('change', function() {
            let fileName = this.value.split('\\').pop();
            let label = document.querySelector('.input-file span');
            label.textContent = fileName;
        });
    </script>
    @endsection
</body>

</html>