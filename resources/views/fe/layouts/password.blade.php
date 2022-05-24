@extends('fe.master')
@section('main')

<!-- Font Icon -->
<link rel="stylesheet" href="{{url('assets')}}/login/fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="{{url('assets')}}/login/css/style.css">

<!-- banner -->
<div class="banner">
    <div class="sub-banner">
        <h3 class="text-uppercase text-center">Đổi mật khẩu</h3>
    </div>
</div>

{{-- content --}}
<div class="container mt-3 mb-5">
    <!-- Sign up form -->
    <section class="signup m-0">
        <div class="login">
            <div class="signup-content">
                <div class="signup-form">
                    <!-- <h2 class="form-title"></h2> -->
                    <form method="POST" class="register-form" id="register-form" action="{{route('home.passwordEdit', Auth::user()->id)}}">
                        @csrf

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password_old" id="pass" value="" placeholder="Mật khẩu hiện tại"/>
                            @error('password_old')
                                <p class="help-block" style="color:red">{{$message}}</p>
                            @enderror

                            @if(isset($err))
                            <p class="help-block" style="color:red">{{$err}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" value="" placeholder="Mật khẩu mới"/>
                            @error('password')
                                <p class="help-block" style="color:red">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_password" id="re_pass" placeholder="Nhập lại mật khẩu"/>
                            @error('re_password')
                                <p class="help-block" style="color:red">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Cập nhật mật khẩu"/>
                        </div>

                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{url('assets')}}/login/images/signup-image.jpg" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="{{url('assets')}}/login/vendor/jquery/jquery.min.js"></script>
<script src="{{url('assets')}}/login/js/main.js"></script>

</div>
@stop