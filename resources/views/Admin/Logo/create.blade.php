@extends('Admin-Layout.app')

@section('section')

<!-- Main content -->
<section class="content">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card card-primary">
        <form action="{{ action('App\Http\Controllers\Admin\HomeLogoController@store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-header">
            <h2 class="">Logo Registration</h2>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputClientCompany">Home Logo</label>
              <input type="file" id="inputClientCompany" name="logo" class="form-control">
              @error('logo')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Logo" class="btn btn-success float-right">
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
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>

</html>