<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Volunteer</title>
</head>
<body>
        @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

            <div class="titleSPONSOR card-header">Upload Data Volunteers</div>
            <form action="/volunteer" method="post" enctype="multipart/form-data">
                <a class="cardSPONS block m-10 p-10 bg-white border border-gray-500 rounded-xl shadow-xl">
                    @csrf 
                    <div class="mb-6">
                        <input type="text" name="nama" placeholder="Nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="contPA flex">
                        <div class="photoVOL mb-6">
                            <input type="file" name="photo" placeholder="Upload Foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" required>
                        </div>
                        <div class="asalVOL mb-6">
                            <input  type="text" name="asal"placeholder="Asal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <input type="text" name="no_telepon" placeholder="No Telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <button type="submit" class="btnSUBMITspons text-black justify-center items-center align-middle bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </a>
            </form>


            <div class="relative overflow-x-auto rounded-xl">
                <table class="tabVOL text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="TABLEvol text-xs text-gray-700 uppercase bg-yellow-200 dark:bg-gray-700 dark:text-gray-400 rounded-xl shadow-2xl">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Telp
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteers as $volunteer)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$volunteer->id}}
                            </td>
                            <td class="px-6 py-4">
                                {{$volunteer->nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$volunteer->asal}}
                            </td>
                            <td class="px-6 py-4">
                                {{$volunteer->no_telepon}}
                            </td>
                            <td class="px-6 py-4">
                                Photo
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap flex">
                                <a href="/volunteer/{{$volunteer->id}}/show" class="text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="{{ asset('storage/aset/editing.png') }}" style="height: 25px; width: 25px; margin-right: 50px" >
                                </a>
                            <!-- </td>
                            <td class="px-6 py-4 whitespace-nowrap"> -->
                                <form action="/volunteer/{{$volunteer->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="imgDEL text-red-600 dark:text-red-500 hover:underline">                            
                                        <img src="{{ asset('storage/aset/bin.png') }}" style="height: 25px; width: 25px;">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

</body>
</html>
