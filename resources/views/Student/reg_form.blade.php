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

        
 <div class="container-fluid">

     <form method="post">
        <center style="font-family: Bookman Old Style">
             <h3 class="text-success">REGISTRATION FORM FOR ACTIVITIES OF THE GUIDANCE CENTER</h3>
             <br>
             <h6>School Year:</h6>
        </center> <hr><br>
         <div class="row" required>
            <div class="col">
                <label><strong>ACTIVITY:</strong> </label>
                <input type="text" name="activity" class="form-control">
            </div>
        </div>
            <br>
        <div class="row" required>
            <div class="col">
                <label><strong>DATE:</strong> </label>
                <input type="date" name="date" class="form-control">
            </div>
        </div>
            <br>
        <div class="row" required>
            <div class="col">
                <label><strong>VENUE:</strong> </label>
                <input type="text" name="venue" class="form-control">
            </div>
        </div>
            <br>
        <div class="row" required>
            <div class="col">
                <label><strong>FIRST NAME:</strong> </label>
                <input type="text" name="venue" class="form-control" value="{{$user_info->fname}}">
            </div>

            <div class="col">
                <label><strong>MIDLLE NAME:</strong> </label>
                <input type="text" name="venue" class="form-control"value="{{$user_info->mname}}">
            </div>

            <div class="col">
                <label><strong>LAST NAME:</strong> </label>
                <input type="text" name="venue" class="form-control"value="{{$user_info->lname}}">
            </div>
        </div>
               <br> 
                <button class="btn btn-primary float-right">SUBMIT FORM</button>
                <br> 


    </form>

 </div>



               
@stop