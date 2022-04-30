@extends('admin.adminmain')
@section('content')

<!-- Start right Content here -->
    <!-- ============================================================== -->
    
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Slider Images</h4>
                                <form method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Images</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <input name="image1" type="file">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <input name="image2" type="file">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <input name="image3" type="file">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-3">Update Image</button>
                                </div>
                                </form>

                                <form method="POST">
                                    @csrf
                                <div class="mt-5">
                                    <h2>Who we are</h2>
                                    <textarea id="elm1" name="description"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success waves-effect waves-light mt-3">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    

    @endsection