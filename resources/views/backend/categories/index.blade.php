@extends('backend.layouts.master')




@section('content')


@include('backend.layouts.partials.errors')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Categories</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($categories as $category)

                                    <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->cat_name}}</td>
                                            <td class='col-6 '>{{$category->description}}</td>
                                            <td class='col-2'>

                                            <div class='row'>
                                           <a class='col' href="{{route('categories.edit', $category->id)}}"> <button class="btn btn-info btn-circle">
                                                    <i class="fas fa-pen"></i>
                                             </button></a>

                                            <form action="{{route('categories.delete', $category->id)}}" method="post" class='col'>
                                             @csrf
                                             <button class="btn btn-danger btn-circle" type='submit'>
                                         
                                             <i class="fas fa-trash"></i>
                                             </button>
                                             </form>
                                             </div>

                                            </td>
                                        </tr>

                                    @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



</body>

@endsection()
