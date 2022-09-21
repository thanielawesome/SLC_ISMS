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
    <form method="post" action="add_student_college">
        <div class="form-group" name="myform" style="color: black;">
            <label><strong>ID Number:</strong> </label>
            <input class="form-control" name="idno" required><br>

            <input class="form-control" name="id"  hidden>   
            <label><strong>First Name:</strong> </label>
            <input class="form-control" name="firstname" required><br>

            <label><strong>Middle Name:</strong> </label>
            <input class="form-control" name="middlename" required><br>

            <label><strong>Last Name</strong></label>
            <input class="form-control" name="lastname" required><br>

            <label><strong>Contact Number:</strong> </label>
            <input class="form-control" name="contactno"required><br>

            <label><strong>Department:</strong> </label>
            <select name="department" class="form-control" id="department" required>
                <option >--SELECT--</option>
                @foreach ($department as $d)
                        <option value="{{$d->dept_code}}"> 
                            {{$d->dept_name}}
                        </option>
                @endforeach 
            </select><br>

            <label><strong>Course:</strong> </label>
            <input class="form-control" name="course" required><br>

            <label><strong>Year:</strong> </label>
            <input class="form-control" name="year" required><br>

            <label><strong>Age:</strong> </label>
            <input class="form-control" name="age" required><br>

            <label><strong>Sex:</strong> </label>
            <select class="form-select" aria-label="Default select example" name="sex">
              <option selected>--SELECT--</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select><br>

            <label><strong>Date of Birth:</strong> </label>
            <input type="date" class="form-control" name="date_of_birth" required><br>

            <label><strong>Address:</strong> </label>
            <input type="text" class="form-control" name="address" required><br>

            <label><strong>Parent/Guardian Name:</strong> </label>
            <input class="form-control" name="pg" required><br>

            <label><strong>Parent Contact Number:</strong> </label>
            <input class="form-control" name="pg_cn" required><br>
        </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> ADD STUDENT </button>
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