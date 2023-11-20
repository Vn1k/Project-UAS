<!DOCTYPE html>
<html lang="en">

<head>
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
                        <div class="row mb-3">
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror>
                            </div>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-secondary btn-block text-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table-responsive" style="width: 100%">
            <thead>
                <th>Images</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach($image as $item)
                    <tr>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/images/'.$item->image) }}" style="height: 500px; width: 500px;">
                            @else
                                <span>No image found!</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('galleri.destroy', ['galleri' => $item->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background-color: transparent; color: red; text-decoration: underline; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>