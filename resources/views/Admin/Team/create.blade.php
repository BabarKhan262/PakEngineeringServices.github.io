@extends('Admin-Layout.app')

@section('section')


<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <form action="{{ action('App\Http\Controllers\Admin\TeamController@store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h2 class="">About Form</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputClientCompany">Name</label>
                            <input type="text" id="inputClientCompany" name="name" class="form-control">
                            @error('name')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Designation</label>
                            <input type="text" id="inputClientCompany" name="designation" class="form-control">
                            @error('designation')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Image</label>
                            <input type="file" id="inputClientCompany" name="image" class="form-control">
                            @error('image')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Create new Project" class="btn btn-success float-right">
                    </div>

                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</section>
<!-- /.content -->
</div>

@endsection

@section('script')



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->

@endsection