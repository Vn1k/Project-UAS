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
                            <form action="{{ route('galleri.store') }}" method="post" enctype="multipart/form-data" class="dropzone border-2 border-gray-300 border-dashed rounded-lg" id="myDropzone">
                                @csrf
                                <div class="fallback">
                                    <input type="file" name="image" id="user_avatar" @error('image') is-invalid @enderror>
                                </div>
                            </form>

                            <button id="customSubmitBtn" class="py-2 px-8 bg-utama rounded-xl mt-5 shadow-lg font-medium" style="display:none;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Images
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($image as $item)
                        <tr>
                            <td>
                                @if($item->image)
                                <img src="{{ asset('storage/images/'.$item->image) }}" class="rounded w-96 h-96">
                                @else
                                <span>No image found!</span>
                                @endif
                                <!-- </td>
                <td class="logoBIN px-6 py-4 text-right"> -->
                                @if($item->image)
                                <form action="{{ route('galleri.destroy', ['galleri' => $item->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                        </svg>
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


    <!-- <script>
        Dropzone.options.myDropzone = {
            paramName: 'image',
            maxFilesize: 10,
            acceptedFiles: 'image/*',
            init: function() {
                this.on('success', function(file, response) {
                    // Handle success, e.g., show a success message
                    console.log(response.success);
                });

                this.on('error', function(file, errorMessage) {
                    // Handle error, e.g., show an error message
                    console.log(errorMessage);
                });
            }
        };
    </script> -->
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