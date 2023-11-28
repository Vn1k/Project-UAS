<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Edit Volunteer</title>
</head>
<body class="bgEDITSPONS">
        @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        
        <form  action="/admin/volunteer/{{$volunteer->id}}" method="post">
            <a class="contEDVOL block m-10 p-10 items-center justify-center bg-white border border-gray-100 rounded-xl shadow-2xl">
                @csrf 
                <div class="mb-6 flex"> 
                    <div class="titleNAMEvol text-center uppercase">
                       Nama
                    </div>
                    <input type="text" name="nama" value="{{$volunteer->nama}}" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6 mt-10 flex">
                    <div class="titleASALvol block w-40 text-left uppercase">
                       Asal
                    </div>
                    <input type="text" name="asal" value="{{$volunteer->asal}}" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6 mt-10 flex">
                    <div class="titleTELPvol block w-80 text-left uppercase">
                       No. Telp
                    </div>
                    <input type="text" name="no_telepon" value="{{$volunteer->no_telepon}}" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    Current Foto
                    <img src="{{asset('storage/' . $volunteer->photo)}}">
                </div>
                <div class="mb-6 mt-10 flex">
                    <div class="titlePHOTOvol block w-80 text-left uppercase">
                       Foto
                    </div>
                    <input type="file" name="photo" value="{{$volunteer->photo}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-3xl cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" required>
                </div>
                
                <button type="submit" class="btnSUBMITEDspons text-black justify-center items-center align-middle bg-yellow-200 border-yellow-500 focus:ring-4 focus:outline-none font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow-lg">Submit</button>
            </a>
        </form>

</body>
</html>
