@extends('Admin-Layout.app')

@section('section')


<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <form action="{{ action('App\Http\Controllers\Admin\ContactController@store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h2 class="">Contact Form</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputClientCompany">Email</label>
                            <input type="text" id="inputClientCompany" name="email" class="form-control">
                            @error('email')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Phone</label>
                            <input type="text" id="inputName" name="cell_num" class="form-control">
                            @error('cell_num')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Address</label>
                            <input type="text" id="inputName" name="addres" class="form-control">
                            @error('addres')
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