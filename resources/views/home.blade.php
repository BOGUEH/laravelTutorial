 {{-- Begin page content --}}
 @extends('layout.master')
 @section('content')
<main class="contaner">
    <div class="col-md-4 mt-5">
        <div class="card">
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





