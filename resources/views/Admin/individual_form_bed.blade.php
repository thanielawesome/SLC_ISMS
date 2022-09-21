@extends('admin/template')

 <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@section('mybody')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <form method="post" action="individual_form_process">
                        <center style="font-family: Bookman Old Style">
                            <h3 class="text-success">INDIVIDUAL INVENTORY UPDATE FORM</h3>
                        </center> <hr><br>


                          <div class="row" required>
                            <div class="col">
                                <label><strong>ID #</strong> </label>
                                <input type="text" name="id_no" class="form-control" value="{{$student_info->idnumber}}">
                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                               
                            </div>
                        </div>
                        <br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>FAMILY NAME:</strong> </label>
                                <input type="text" name="lname" class="form-control" value="{{$student_info->lastname}}">
                            </div>
                            <div class="col">
                                <label><strong>GIVEN NAME:</strong> </label>
                                <input type="text" name="fname" class="form-control" value="{{$student_info->firstname}}">
                            </div>
                            <div class="col">
                                <label><strong>MIDDLE NAME:</strong> </label>
                                <input type="text" name="mname" class="form-control" value="{{$student_info->middlename}}">
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>Entry Year:</strong> </label>
                                <input type="text" name="year" class="form-control" value="{{$student_info->entry_year}}">
                            </div>
                            <div class="col">
                                <label><strong>Grade / Year Level:</strong> </label>
                                <input type="text" name="grade" class="form-control" value="{{$student_info->grade_level}}">
                            </div>
                            <div class="col">
                                <label><strong>Curriculum/Strand/Program:</strong> </label>
                                @if($student_info->strand == '')
                                <input type="text" name="strand" class="form-control" value="N/A">
                                @else
                                <input type="text" name="strand" class="form-control" value="{{$student_info->strand}}">
                                @endif
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>Semester / School Year:</strong> </label>
                                <input type="number" name="semester" class="form-control"  value="">
                            </div>
                            <div class="col">
                                <label><strong>Grade & Section/ Program & Year:</strong> </label>
                                <input type="text" name="section" class="form-control"  value="{{$student_info->section}}">
                            </div>
                        </div>
                        <br> 
                         <div class="row" required>
                            <div class="col">
                                <label><strong>Report Form:</strong> </label>
                                <input type="text" name="report_form" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Date Filed</strong> </label>
                                <input type="date" name="date_filed" class="form-control">
                            </div>
                        </div><br>

                        <div class="row" required>
                            <div class="col">
                                <label><strong>Counselor</strong> </label>
                                <input type="text" name="action" class="form-control" value="{{$user_info->fname}} {{$user_info->lname}}">
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                            </div>
                        </div><br>

                        <button class="btn btn-primary float-right">SUBMIT FORM</button>
                        <br> <br> <br> <br>     
                    </form>
                           

                        
                </div>
                <!-- End of Main Content -->

           
        </div>
        <!-- End of Content Wrapper -->

    </div>
 @stop
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
        $('#data_table').DataTable({
          order: [[0, 'DESC']],
        });
    } );


  </script>