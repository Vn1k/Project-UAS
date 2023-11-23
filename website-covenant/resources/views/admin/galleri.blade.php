<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Galleri</title>
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <div class="card">
                <div class="titleSPONSOR card-header">Upload Galleri</div>
            
            </div>
            <form class="formGAL w-px-500 p-3 p-md-3" action="{{ route('galleri.store') }}" method="post" enctype="multipart/form-data">
                <a class="cardGAL block m-10 p-10 bg-white border border-gray-200 rounded-lg shadow-xl">
                    
                        @csrf
                        
                            <div class="containerGalleri">
                                    <div class="fileGAL col-sm-9 items-center justify-center">
                                        <label class="nameGAL block mb-2 text-sm items-center justify-center font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                                        <input class="block w-80 items-center justify-center text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image" @error('image') is-invalid @enderror>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btnFormGalleri items-center justify-center text-black bg-yellow-100 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                    </div>
                                </div>
                            </div>
                                
                       </a> 
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    <div class="tableGal relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="contGAL text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="titleGal">
                <th scope="col" class="px-6 py-3">
                    Images
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($image as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="inputIMG px-6 py-4">
                    @if($item->image)
                    <img src="{{ asset('storage/images/'.$item->image) }}" style="height: 100px; width: 100px;">
                    @else
                    <span>No image found!</span>
                    @endif
                <!-- </td>
                <td class="logoBIN px-6 py-4 text-right"> -->
                    @if($item->image)
                    <form action="{{ route('galleri.destroy', ['galleri' => $item->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="imgBIN">
                            <img src="{{ asset('storage/aset/bin.png') }}" style="height: 100px; width: 100px;">
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>

</html>