<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ISMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
          rel="stylesheet"
        />
        <!-- MDB -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
          rel="stylesheet"
        />

        <!-- Styles -->
        <style>
            .divider:after,
                .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
                }
                .h-custom {
                height: calc(100% - 73px);
                }
                @media (max-width: 450px) {
                .h-custom {
                height: 100%;
                }
                }
           
        </style>
    </head>
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
    
<body class="antialiased" style="background: url({{ asset('images/bg.jpg') }}) no-repeat center center fixed; background-size: cover;">
        <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{url('/images/slc logo.png')}}"
          class="img-fluid" alt="Sample image" width="400px">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" >
        <form method="post" action="login-process">
            <center>
              <u><strong><h1 style="color:black;font-family:Arial;">Integrated Service Management</h1></strong></u>
            </center>
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid username" style="background:white;"/>
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" style="background:white;" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3" style="background:white;"a>
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>
          {{csrf_field()}}
        </form>
      </div>
    </div>
  </div>
 
</section>
    </body>
</html>
  