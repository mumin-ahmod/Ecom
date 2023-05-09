@extends('backend.layouts.master')


@section('content')
@include('backend.layouts.partials.errors')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Edit Category</h1>
                                    </div>
                                    <form class="user" action="{{route('categories.update', $category->id)}}" method = 'post'>
                                        @csrf
                                     
                            
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Name" name="cat_name" value="{{$category->cat_name}}">

                                                @error('cat_name')
                                                <p class='text-danger'>{{$message}}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Discription" name="description" value="{{$category->description}}">
                                                @error('description')
                                                <p class='text-danger'>{{$message}}</p>
                                                @enderror
                                        </div>
                                       
                                        <button class="btn btn-primary btn-user btn-block" type='submit'>
                                            Enter
                                        </button>
                                        <hr>
                                      
                                    </form>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

@endsection()