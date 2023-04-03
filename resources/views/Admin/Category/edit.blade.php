@extends('Admin-Layout.app')

@section('section')

<!-- Main content -->
<section class="content">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card card-primary">
        <form action="{{ action('App\Http\Controllers\Admin\CategoryController@update',$categories->cat_id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="card-header">
            <h2 class="">Category Edit Form</h2>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="name" value="{{ $categories['name'] }}" class="form-control">
              @error('name')
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
<br><br>


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