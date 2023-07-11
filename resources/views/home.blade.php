 {{-- Begin page content --}}
 @extends('layout.master')
 @section('content')
 <main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    Vel nostrum sit inventore, voluptate labore aut cupiditate nisi,
    quaerat accusamus debitis id autem. Animi beatae voluptates quos,
     non nam ullam reprehenderit.
</main>


    <div class="container">
        <div class="row mt-5">
            @foreach ($posts as $post )

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2> {{$post['title']}} </h2>
                        <p> {{$post['description']}} </p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>


    @endsection





