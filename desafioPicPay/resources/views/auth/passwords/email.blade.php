<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
{{--    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/wow/css/animate.css')}}"/>--}}
<!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login1.css')}}"/>
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <span class="text-white"> PicPay &nbsp;<br/>
                              </span>
                        </h3>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="bg-white login_content login_border_radius">
                        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label">E-mail</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text  border-right-0  input_email"><i
                                                class="fa fa-envelope text-primary"></i></span>
                                    <input id="email" type="email" class="form-control form-control-md {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enviar link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{--<div class="form-group">--}}
                        {{--<label class="col-form-label">Don't you have an Account? </label>--}}
                        {{--<a href='register1' class="text-primary"><b>Sign Up</b></a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/wow/js/wow.min.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/login1.js')}}"></script>
</body>
</html>
