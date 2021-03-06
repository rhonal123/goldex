<div class="container-fuild">
<div class="row">
<div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
  <div class="panel panel-primary">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
      <div class="col-md-4 col-sm-3" align="right">
        <img src="assets/images/goldex310x310.png"
        class="img-responsive"
        alt="Responsive image"
        >
      </div>
      <div class="col-md-8 col-sm-9">
      <form id="form-login" class="form-horizontal" 
        role="form" 
        method="POST" 
        action="{{ url('/login') }}" >
         {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="col-sm-3 control-label" for="email">Email</label> 
          <div class="col-sm-9">
            <input id="email" type="email" name="email" class="form-control" formControlName="email" aria-describedby="erroremail" value="{{ old('email') }}" required >
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-sm-3 control-label" for="password">Password</label>
          <div class="col-sm-9">
            <input  id="password" type="password" name="password" class="form-control" formControlName="password" aria-describedby="errorpassword" required >
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12" align="right">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-sign-in"></i> Iniciar
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>