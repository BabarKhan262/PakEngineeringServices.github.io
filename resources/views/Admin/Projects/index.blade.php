@extends('Admin-Layout.app')

@section('section')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <a href="{{ action('App\Http\Controllers\Admin\ProjectsController@create') }}" class="btn btn-outline-info">Add New Product</a>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Products</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Desc</th>
                  <th>Architects</th>
                  <th>Location</th>
                  <th>Category name</th>
                  <th>Area</th>
                  <th>Manufactures</th>
                  <th>PROJECT YEAR</th>
                  <th>Image</th>
                  <th>Side Image-1</th>
                  <th>Side Image-2</th>
                  <th colspan="2" class="text-center">Actions</th>
                </tr>
              </thead>
              @foreach($projects as $key=>$project)
              <tbody>
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $project['title'] }}</td>
                  <td>{{ $project['desc'] }}</td>
                  <td>{{ $project['architects'] }}</td>
                  <td>{{ $project['location'] }}</td>
                  <td>{{ $project->categories['name'] }}</td>
                  <td>{{ $project['area'] }}</td>
                  <td>{{ $project['manufactures'] }}</td>
                  <td>{{ $project['created_at'] }}</td>
                  <td>
                    <img src="{{ asset($project->image) }}" width="70px" height="70px" alt="">
                  </td>
                  <td>
                    <img src="{{ asset($project->side_image_1) }}" width="70px" height="70px" alt="">
                  </td>
                  <td>
                    <img src="{{ asset($project->side_image_2) }}" width="70px" height="70px" alt="">
                  </td>
                  <td>
                    <a href="projects/{{ $project['p_id'] }}/edit" class="btn btn-info">Edit</a>
                  </td>
                  <td>
                    <form action="{{ action('App\Http\Controllers\Admin\ProjectsController@destroy',$project['p_id']) }}" method="post" onsubmit="return confirmDelete()">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
            <br>
            {{ $projects->links('pagination::bootstrap-4') }}
            <br>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


@endsection

@section('script')

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
<script>
  function confirmDelete() {
    return confirm('Are you sure to Delete this data ??');
  }
</script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection