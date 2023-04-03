@extends('Admin-Layout.app')

@section('section')

<!-- Main content -->
<section class="content">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card card-primary">
        <form action="{{ action('App\Http\Controllers\Admin\ProjectsController@store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-header">
            <h2 class="">Project Form</h2>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label class="block">
                <span class="text-gray-700">Select Categories</span>
                <select name="cat_id" class="form-control">
                  <option value="">Select Category</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->cat_id}}" select>{{$category->name}}</option>
                  @endforeach
                </select>
                @error('cat_id')
                <span style="color:red;">{{ $message }}</span>
                @enderror
              </label>
            </div>
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="title" class="form-control">
              @error('title')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputDescription">Description</label>
              <textarea id="inputDescription" class="form-control" name="desc" rows="4"></textarea>
              @error('desc')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputName">Architects</label>
              <input type="text" id="inputName" name="architects" class="form-control">
              @error('architects')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputName">Location</label>
              <input type="text" id="inputName" name="location" class="form-control">
              @error('location')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputName">Area</label>
              <input type="text" id="inputName" name="area" class="form-control">
              @error('area')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputName">Manufactures</label>
              <input type="text" id="inputName" name="manufactures" class="form-control">
              @error('manufactures')
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
            <div class="form-group">
              <label for="inputClientCompany">Side Image-1</label>
              <input type="file" id="inputClientCompany" name="side_image_1" class="form-control">
              @error('side_image_1')
              <span style="color:red;">{{ $message }}</span>
              @enderror
              <br>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Side Image-2</label>
              <input type="file" id="inputClientCompany" name="side_image_2" class="form-control">
              @error('side_image_2')
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