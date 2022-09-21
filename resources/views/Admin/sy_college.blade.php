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
    <table class="table table-bordered" style="color: BLACK;" id="data_table">
        <thead>
            <tr>
                <td>ID NUMBER</td>
                <td>NAME</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach($college as $c)
            <tr>
                <td>{{$c->idnumber}}</td>
                <td>{{$c->firstname}} {{$c->lastname}}</td>
                <td>
                    <a href="{{url('/admin/view_college?id=')}}{{$c->idnumber}}">
                        <button class="btn btn-primary">
                            <i class="fas fa-eye"></i> VIEW
                        </button>
                    </a>
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