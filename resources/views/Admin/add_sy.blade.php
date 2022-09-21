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
    <form method="post" action="add_sy_process">
        <div class="form-group" name="myform" style="color: black;">
            <label><strong>School Year Duration:</strong> </label>
            <input class="form-control" name="sy_duration" required><br>

            <label><strong>School Year Semester:</strong> </label>
            <input class="form-control" name="sy_semester" required><br>

            <label><strong>School Year Code:</strong> </label>
            <input class="form-control" name="sy_code" required><br>

            <label><strong>Status:</strong> </label>
            <input class="form-control" name="status" required><br>
        </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> ADD</button>
            </div>
        {{csrf_field()}}
    </form>

    <hr><hr>
        <center>
            <h5 style="color:green;font-family: monospace;"><strong>MANAGE SCHOOL YEAR BEDs</strong></h5>
        </center>
        <hr>
        <table class="table table-primary" style="color:black;">
            <thead>
                <tr>
                    <td><strong>SCHOOL YEAR DURATION</strong></td>
                    <td><strong>STATUS</strong></td>
                    <td style="text-align: center;"><strong>ACTION</strong></td>
                </tr>
                </tr>
            </thead>
            <tbody>
                @foreach($sy_bed as $sy)
                <tr>
                    <td>{{$sy->sy_duration}}</td>
                    <td>{{$sy->status}}</td>
                    <td align="center">
                        <div class="btn-group btn-group-justified">
                            <button class="btn btn-primary">EDIT</button>
                            <button class="btn btn-primary">DELETE</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <hr><hr><br><br><br>
        <center>
            <h5 style="color:green;font-family: monospace;"><strong>MANAGE SCHOOL YEAR COLLEGE & GS</strong></h5>
        </center>
        <hr>
        <table class="table table-primary"  style="color:black;">
            <thead>
                <tr>
                    <td><strong>SCHOOL YEAR DURATION</strong></td>
                    <td><strong>SCHOOL SEMESTER</strong></td>
                    <td><strong>SCHOOL YEAR CODE</strong></td>
                    <td><strong>STATUS</strong></td>
                    <td style="text-align: center;"><strong>ACTION</strong></td>
                </tr>
                </tr>
            </thead>
            <tbody>
                @foreach($sy_bed as $sy)
                <tr>
                    <td>{{$sy->sy_duration}}</td>
                    <td>{{$sy->sy_semester}}</td>
                    <td>{{$sy->sy_code}}</td>
                    <td>{{$sy->status}}</td>
                    <td align="center">
                        <div class="btn-group btn-group-justified">
                            <button class="btn btn-primary">EDIT</button>
                            <button class="btn btn-primary">DELETE</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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