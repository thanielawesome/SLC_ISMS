@extends('student/template')

@if(isset($success))
<div class="alert alert-success" role="alert">
  <center>
      {{$success}}
  </center> 
</div>
@endif


@if(isset($error))
<div class="alert alert-danger" role="alert">
  <center>
      {{$error}}
  </center> 
</div>
@endif


@section('mybody')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <form method="post">
                        <center style="font-family: Bookman Old Style">
                            <h3 class="text-success">INDIVIDUAL INVENTORY UPDATE FORM</h3>
                        </center> <hr><br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>First Name:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Given Name:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Middle Name:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>Entry Year:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Grade / Year Level:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Curriculum/Strand/Program:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>ID #</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>Semester / School Year:</strong> </label>
                                <input type="number" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Grade & Section/ Program & Year:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Report Form:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Date Filed</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                             <div class="col">
                                <label><strong>Counselor</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                        
                        </div>
                        <br> 
                        <button class="btn btn-primary float-right">SUBMIT FORM</button>
                        <br> <br> <br> <br>     
                    </form>
                           

                        
                </div>
                <!-- End of Main Content -->
@stop