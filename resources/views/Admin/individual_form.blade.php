@extends('admin/template')

 <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@section('mybody')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                        <center style="font-family: Bookman Old Style">
                            <h3 class="text-success">INDIVIDUAL INVENTORY UPDATE FORM</h3>
                        </center> <hr><br>

                        <table class="table table-primary" id="data_table">
                            <thead>
                                <tr>
                                    <td><strong>ID Number</strong></td>
                                    <td><strong>First Name</strong></td>
                                    <td><strong>Middle Name</strong></td>
                                    <td><strong>Last Name</strong></td>
                                    <td><strong>ACTION</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student_bed as $s)
                                <tr>
                                    <td>{{$s->idnumber}}</td>
                                    <td>{{$s->firstname}}</td>
                                    <td>{{$s->middlename}}</td>
                                    <td>{{$s->lastname}}</td>
                                    <td>
                                        <a href="{{url('admin/individual_form_bed?idnumber='.$s->idnumber)}}">
                                            <button class="btn btn-success">
                                                EDIT
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                            
                        </table>



                           

                        
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