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
                            <h3 class="text-success">FORM FOR SHIFTERS</h3>
                        </center> <hr><br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>Name:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Date:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>Last Term Attended:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Course & Year:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Course desired to shift to:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>INTERVIEW OF COUNSELOR:</strong> </label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>Student's Signature:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Date signed:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                        </div>
                         <br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>Name & Signautre of Counselor:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Date signed:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>

                        </div>
                        <br> 
                        <button class="btn btn-primary float-right">SUBMIT FORM</button>
                        <br> <br> <br> <br>     
                    </form>
                           

                        
                </div>
                <!-- End of Main Content -->
@stop