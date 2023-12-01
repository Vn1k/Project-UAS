<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.css">
    <title>Galleri</title>
    <style>
        .dropzone.dz-clickable * {
            cursor: pointer;
        }
    </style>
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    <div class="p-4 sm:ml-64 font-kanit">
        <div class="p-4">
            <div>
                <div>
                    <div>
                        <div class="form-up-12">
                            <div>
                                <h1 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Upload Galleri</h1>
                            </div>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <form action="{{ route('galleri.store') }}" method="post" enctype="multipart/form-data" class="dropzone border-2 border-gray-300 border-dashed rounded-lg my-10" id="myDropzone">
                                @csrf
                                <div class="fallback">
                                    <input type="file" name="image" id="user_avatar" @error('image') is-invalid @enderror>
                                </div>
                            </form>

                            <button id="customSubmitBtn" class="py-2 px-8 bg-utama rounded-xl my-5 shadow-lg font-medium" style="display:none;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-utama  dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($image as $item)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if($item->image)
                                <img src="{{ asset('storage/images/'.$item->image) }}" class="rounded w-96 h-96">
                                @else
                                <span>No image found!</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($item->image)
                                <form action="{{ route('galleri.destroy', ['galleri' => $item->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 dark:text-red-500 text-base font-medium hover:underline">
                                        <span>Hapus</span>
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.js"></script>

    <script>
        Dropzone.options.myDropzone = {
            paramName: 'image',
            maxFilesize: 10,
            acceptedFiles: 'image/*',
            autoProcessQueue: false, // Disable auto processing
            addRemoveLinks: true, // Enable remove button

            init: function() {
                var submitButton = document.querySelector("#customSubmitBtn");
                var myDropzone = this;

                this.options.dictDefaultMessage = "Custom instructions or message here.";

                // Show the custom submit button when files are added
                this.on('addedfile', function() {
                    submitButton.style.display = 'block';
                });

                // Hide the custom submit button when files are removed
                this.on('removedfile', function() {
                    if (myDropzone.files.length === 0) {
                        submitButton.style.display = 'none';
                    }
                });

                // Process the queue, add a delay, and then refresh the page when the custom submit button is clicked
                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue();
                    setTimeout(function() {
                        location.reload();
                    }, 1000); // Adjust the delay time (in milliseconds) as needed
                });

                // Handle the "complete" event
                this.on('complete', function() {
                    // You can add any additional logic here if needed
                });
            }
        };
    </script>

</body>

</html>