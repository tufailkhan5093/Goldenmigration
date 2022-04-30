@extends('admin.adminmain')
@section('content')
    
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="update address" rows="2"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label>Phone</label>
                                <input class="form-control" placeholder="update phone">
                            </div>
                            <div class="form-group mt-3">
                                <label>Email</label>
                                <input class="form-control" placeholder="update Email">
                            </div>
                        </form>
                        
                        <button type="button" class="btn btn-success waves-effect waves-light mt-3">Save Update</button>
                    </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->

@endsection