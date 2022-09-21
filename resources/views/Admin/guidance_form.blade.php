@extends('admin/template')
@section('mybody')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <form method="post" action="guidance_form_process">
                        <center style="font-family: Bookman Old Style">
                            <h3 class="text-success">GUIDANCE INTERVIEW FORM</h3>
                        </center> <hr><br>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>NAME:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>DATE:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                          <div class="row" required>
                            <div class="col">
                                <label><strong>SCHOOL ATTENDED:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>SCHOOL YEAR & TERM:</strong> </label>
                                <input type="date" name="" class="form-control">
                            </div>
                            <div class="col">
                                <label><strong>Grade/Program & Year:</strong> </label>
                                <input type="text" name="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>INTERVIEW:</strong> </label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="check2" name="interview">Walk-in
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="check2" name="interview">Scheduled
                            </div>
                        </div>
                        <div class="row" required>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="check2" name="change_cur">Change Curriculum/Strand/Program<br>
                                <input type="checkbox" class="form-check-input" id="check2" name="exit">Exit<br>
                                <input type="checkbox" class="form-check-input" id="check2" name="shift">Shift<br>
                                <input type="checkbox" class="form-check-input" id="check2" name="routine">Routine<br>
                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>
                        <hr>
                        <div class="row" required>
                            <div class="col">
                                <label><strong>REASONS:</strong> </label><br>
                                <input type="checkbox" class="form-check-input" id="check2" name="change_cur">Academics<br>
                                <input type="checkbox" class="form-check-input" id="check2" name="exit">Health<br>
                                <input type="checkbox" class="form-check-input" id="check2" name="shift">Migrate to other country (pls. specify)
                                <input type="text" name="shift" class="form-control">
                                <input type="checkbox" class="form-check-input" id="check2" name="routine">Transfer to another school (pls. specify)

                                <input type="text" name="shift" class="form-control">
                                <input type="checkbox" class="form-check-input" id="check2" name="routine">Others (pls. specify)

                                <input type="text" name="shift" class="form-control">

                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                
                            </div>
                            
                        </div>
                        <br>

                        </div>
                        <br> 
                        <button class="btn btn-primary float-right" type="submit" name="submit"> SUBMIT FORM</button>
                        <br> <br> <br> <br>     

                        {{csrf_field()}}
                    </form>
                           

                        
                </div>
                <!-- End of Main Content -->

         @stop