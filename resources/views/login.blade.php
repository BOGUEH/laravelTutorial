@extends('layout.master');
@section('content');


<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h1 class="mb-5">Login</h1>
        <div class="card">
            <div class="card-body">

                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User name</label>
                        <input name="name" type="text" class="form-control" placeholder="User name">
                    </div>

                    <div class="mb-2">

                        <label for="" class="form-label">email</label>
                        <input name="email" type="email" class="form-control"placeholder="email" >
                     </div>
                     <div class="mb-2">

                         <label for="" class="form-label">password</label>
                         <input name="password" type="password" class="form-control" placeholder="password">

                     </div>
                     <button class="btn btn-primary"> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
