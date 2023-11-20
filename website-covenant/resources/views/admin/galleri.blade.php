<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form class="w-px-500 p-3 p-md-3" action="{{ route('galleri.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <a class="cardForm block m-10 p-6 bg-white border border-gray-200 rounded-lg shadow ">
                                <div class="col-sm-9 items-center justify-center">
                                    <label class="block mb-2 text-sm items-center justify-center font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                                    <input class="block w-80 items-center justify-center text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image" @error('image') is-invalid @enderror>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btnFormKegiatan items-center justify-center text-black bg-yellow-100 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                </div>
                            </div>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table-responsive" style="width: 100%">
            <thead>
                <th>Images</th>
                <th>Action</th> <!-- Add a column for the action -->
            </thead>
            <tbody>
                @foreach($image as $item)
                <tr>
                    <td>
                        @if($item->image)
                        <img src="{{ asset('storage/images/'.$item->image) }}" style="height: 500px; width: 500px;">
                        </td>
                        <td>
                            <form action="{{ route('galleri.destroy', ['galleri' => $item->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background-color: transparent; color: red; text-decoration: underline; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                        @else
                        <span>No image found!</span>
                        @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
