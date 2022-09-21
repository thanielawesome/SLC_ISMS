@extends('admin/template')
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
      <div class="form-group">
        <div class="row" required>
            <div class="col">
                <label><strong>First Name:</strong> </label>
                <label>{{$student_info->firstname}}</label>
            </div>
            <div class="col">
                <label><strong>Middle Name:</strong> </label>
                <label>{{$student_info->middlename}}</label>
            </div>
            <div class="col">
                <label><strong>Last Name:</strong> </label>
                <label>{{$student_info->lastname}}</label>
            </div>
        </div><br>

        <div class="row" required>
            <div class="col">
                <label><strong>Id Number:</strong> </label>
                <label>{{$student_info->idnumber}}</label>
            </div>
            <div class="col">
                <label><strong>Contact Number:</strong> </label>
                <label>{{$student_info->contact_number}}</label>
            </div>
        </div> <br>

        <div class="row" required>
            <div class="col">
                <label><strong>Grade Level:</strong> </label>
                <label>{{$student_info->grade_level}}</label>
            </div>
            <div class="col">
                <label><strong>Section:</strong> </label>
                <label>{{$student_info->section}}</label>
            </div>
        </div> <br>
        <div class="row" required>
            <div class="col">
                <label><strong>Parent/Guardian Name:</strong> </label>
                <label>{{$student_info->guardian_name}}</label>
            </div>
            <div class="col">
                <label><strong>Contact Number:</strong> </label>
                <label>{{$student_info->pg_contact_number}}</label>
            </div>
        </div> <br>
      </div>
        <div class="footer float-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update">
              <i class="fas fa-user-edit"></i> UPDATE
            </button>

            <!-- Modal -->
            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE PROFILE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="update_student">
                        <label>FIRST NAME</label>
                        <input class="form-control" name="firstname" value="{{$student_info->firstname}}"><br>
                        <input class="form-control" name="id" value="{{$student_info->id}}" hidden>      

                        <label><strong>Middle Name:</strong> </label>
                        <input class="form-control" name="middlename" value="{{$student_info->middlename}}"><br>

                        <label><strong>Last Name:</strong> </label>
                        <input class="form-control" name="lastname" value="{{$student_info->lastname}}"><br>

                        <label><strong>Id Number:</strong> </label>
                        <input class="form-control" name="idno" value="{{$student_info->idnumber}}"><br>


                        <label><strong>Contact Number:</strong> </label>
                        <input class="form-control" name="contactno" value="{{$student_info->contact_number}}"><br>

                        <label><strong>Grade Level:</strong> </label>
                        <input class="form-control" name="grade" value="{{$student_info->grade_level}}"><br>
           
                        <label><strong>Section:</strong> </label>
                        <input class="form-control" name="section" value="{{$student_info->section}}"><br>
            
                        <label><strong>Parent/Guardian Name:</strong> </label>
                        <input class="form-control" name="pg" value="{{$student_info->guardian_name}}"><br>
            
                        <label><strong>Contact Number:</strong> </label>
                        <input class="form-control" name="pg_cn" value="{{$student_info->pg_contact_number}}"><br>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-user-edit"></i> Update</button>
                  </div>
                  {{csrf_field()}}
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i> DELETE
            </button>

            <!-- Modal -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DELETE STUDENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="delete_student">
                    Are you sure you want to delete <strong>{{$student_info-> firstname}} {{$student_info->lastname}}</strong>?
                    <input type="" name="id" value="{{$student_info->id}}"  hidden="">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                  </div>
                  {{csrf_field()}}
                  </form>
                </div>
              </div>
            </div>
        </div>
  </div>
    
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