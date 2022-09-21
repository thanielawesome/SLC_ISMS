@extends('admin/template')

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@if(session()->has('success'))
    <div class="alert alert-success">
        <center>
        {{ session()->get('success') }}
        </center>
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        <center>
        {{ session()->get('error') }}
        </center>
    </div>
@endif
@section('mybody')
<div class="container-fluid">
    <div class="jumbotron">
    <form method="post" action="add_year">
        <div class="form-group" name="myform" style="color: black;">
            <label><strong>Year Level:</strong> </label>
            <input type="text" class="form-control" name="ylno" required><br>
        </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> ADD GRADE LEVEL </button>
            </div>
        {{csrf_field()}}
    </form>
    </button>
</div>
@stop
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
        $('#data_table').DataTable({
        "order": [[ 0, 'desc' ]]       
      });
    } );


  </script>