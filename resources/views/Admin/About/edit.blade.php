@extends('Admin-Layout.app')

@section('section')


<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <form action="{{ action('App\Http\Controllers\Admin\AboutController@update',$about->about_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <h2 class="">About Edit Form</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Title</label>
                            <input type="text" id="inputName" name="about_title" value="{{ $about['about_title'] }}" class="form-control">
                            @error('about_title')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" value="{{ $about['about_desc'] }}" name="about_desc" rows="4"></textarea>
                            @error('about_desc')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Image</label>
                            <input type="file" id="inputClientCompany" name="about_image" value="{{ $about['about_image'] }}" class="form-control">
                            @error('about_image')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Update About" class="btn btn-success float-right">
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