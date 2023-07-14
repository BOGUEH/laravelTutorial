 {{-- Begin page content --}}
 @extends('layout.master')
 @section('content')
<main class="contaner">

        <img src="{{asset('storage/image/new_image.jpg')}}" alt="">
    <div class="col-md-4 mt-5">

        <div class="card">
             @if ($errors->any())
                @foreach ( $errors->all() as $error )
                    <div class="alert alert-danger"> {{$error}} </div>

                @endforeach
             @endif
            <div class="card-body">
                <form action=" {{route('upload-file')}} " enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""> Upload </label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success mt-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection





