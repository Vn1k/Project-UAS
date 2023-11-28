<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Edit sponsor</title>
</head>
<body class="bgEDITSPONS">
        @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        
        <form  action="/admin/sponsor/{{$sponsor->id}}" method="post">
            <a class="contEDSPONS block m-10 p-10 items-center justify-center bg-white border border-gray-100 rounded-xl shadow-2xl">
                @csrf 
                <div class="mb-6 flex"> 
                    <div class="titleINS mr-20 text-center uppercase">
                       Instansi 
                    </div>
                    <input type="text" name="instansi" value="{{$sponsor->instansi}}" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6 mt-10 flex">
                    <div class="titleINS block w-80 text-left uppercase">
                       Penanggung Jawab
                    </div>
                    <input type="text" name="penanggung_jawab" value="{{$sponsor->penanggung_jawab}}" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <button type="submit" class="btnSUBMITEDspons text-black justify-center items-center align-middle bg-yellow-200 border-yellow-500 focus:ring-4 focus:outline-none font-medium rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow-lg">Submit</button>
            </a>
        </form>
    

</body>
</html>


