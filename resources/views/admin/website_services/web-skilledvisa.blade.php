@extends('admin.adminmain')
@section('content')
    
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="mt-3">
                                        <textarea id="elm1" name="description"></textarea>
                                    </div>
                                    

                                     <button type="submit" class="btn btn-success waves-effect waves-light mt-3">Save Update</button>
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
    </div>
    <!-- end main content-->

@endsection