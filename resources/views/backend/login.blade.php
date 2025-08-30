@extends('backend.layout.layout_login')



@section('content')


<div class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Barabd</b>Welfare</a>
    </div>
    <div class="card-body">

      <form action="{{ route('authenticate')}}" method="post">
        @csrf 
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
           <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" />
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


</div>

</div>



@endsection




