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
        </center>
        <br>
    <div class="row" required>
        <div class="col">
              <label><strong>NAME:</strong> </label>
             <input type="text" name="venue" class="form-control" value="{{$user_info->fname}} {{$user_info->mname}} {{$user_info->lname}}">
        </div> 
        <div class="col">
              <label><strong>DATE:</strong> </label>
              <input type="date" name="date" class="form-control">
        </div>       
     </div>
     <br>
     <div class="row" required>
        <div class="col">
             <label><strong>GRADES/COURSE & YEAR:</strong> </label>
             <input type="text" name="date" class="form-control">
         </div>
         <div class="col">
             <label><strong>LAST SCHOOL YEAR ATTENDED:</strong> </label>
             <input type="text" name="date" class="form-control">
         </div>
         <div class="col">
             <label><strong>SEMESTER:</strong> </label>
             <input type="text" name="date" class="form-control">
         </div>
         <div class="col">
             <label><strong>SHORT TERM:</strong> </label>
             <input type="text" name="date" class="form-control">
         </div>
     </div>
     <br>
     <div class="row" required>
        <div class="col">
            <label><strong>REASON/S FOR LEAVING</strong> </label>
             <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      ACADEMICS
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      PERSONAL
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      FINANCIAL
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                     HEALTH
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      CHANGE OF RESIDENCE
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      MIGRATE TO OTHER COUNTRY
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      TRANSFER TO ANOTHER SCHOOL (pls. specify):
                </label>
                <br>
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                      OTHERS (pls. specify):
                </label>
            </div>
              <br>
    </div>
    <div class="col">
        <label><strong>REMARKS:</strong> </label>
        <textarea colspan="70" type="text" name="date" class="form-control"></textarea>
    </div>

</div>
 <div class="row" required>
    <div class="col">
        <label><strong>Student's signatur/Authorized Reprensetative:</strong> </label>
        <input type="text" name="date" class="form-control">
    </div>
    <div class="col">
        <label><strong>Name & Signature of Counselor:</strong> </label>
        <input type="text" name="date" class="form-control">
    </div>
    <div class="col">
        <label><strong>Date Signed:</strong> </label>
        <input type="date" name="date" class="form-control">
    </div>
</div>
<br> 
<button class="btn btn-primary float-right">SUBMIT FORM</button>
<br> <br> <br> <br>     
        </form>
</div>
        



               
@stop