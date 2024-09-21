@extends('layouts.app')

@section('content')

<div class="content">
    <div class="wrapper">
        <form action="">
            <h1 style="text-align: center;">Register</h1>
            <div class="input-box">
                <input type="text" placeholder="ชื่อผู้ใช้" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="รหัสผ่าน" required>
                <i class='bx bx-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="ยืนยันรหัสผ่าน" required>
                <i class='bx bx-lock-alt' ></i>
            </div>
            <a href="{{ route('type') }}">
                <button type="submit" class="btn">ดำเนินการต่อ</button>
            </a>
            <div class="register-link">
                <p>If you have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
            <style>
                .content{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                }
                .wrapper{
                    width: 420px;
                    background: transparent;
                    border: 2px solid rgba(255, 255, 255, .2);
                    backdrop-filter: blur(20px);
                    box-shadow: 0 0 10px  rgba(0, 0, 0, .2);
                    color: #fff;
                    border-radius: 10px;
                    padding: 30px 40px;

                }
                '.wrapper h1{
                    font-size: 36px;
                }
                .wrapper .input-box{
                    width: 100%;
                    height: 50px;
                    background: salmon;
                    margin: 30px 0;
                }
                .input-box input {
                    width: 100%;
                    height: 100%;
                    margin-top: 5%;
                    background: transparent;
                    border: none;
                    outline: none;
                    border: 2px solid rgba(255, 255, 255, .2);
                    border-radius: 40px;
                    font-size: 16px;
                    color: #fff;
                    padding: 20px 45px 20px 20px;
                }
                .input-box input::placeholder {
                    color: #fff;
                }
                .input-box i {
                    position: absolute;
                    right : 15%;
                    margin-top: 12%; 
                    transform: translateY(-50%);
                    font-size: 20px; 
                }
                .wrapper .btn {
                    width: 100%;
                    height: 45px;
                    background: #31bcea;
                    border: none;
                    outline: none;
                    border-radius: 40px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                    cursor: pointer;
                    font-size: 16px;
                    color: #fff;
                    font-weight: 600;
                    margin-top: 5%;
                }
                .wrapper .register-link {
                    font-size: 14.5px;
                    text-align: center;
                    margin-top: 20px;
                }
                .register-link p a {
                    color: #31bcea;
                    text-decoration: none;
                    font-weight: 20px;
                }
                .register-link p a:hover{
                    text-decoration: underline;
                }
            </style>
        </form>
    </div>
</div>



{{-- <main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('register') }}">
      <h1 class="h3 mb-3 fw-normal">ลงทะเบียน</h1>
  
      <div class="form-floating my-2">
        <input type="username" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">ชื่อผู้ใช้</label>
      </div>

      <div class="form-floating my-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">รหัสผ่าน</label>
      </div>

      <div class="form-floating my-2">
        <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password">
        <label for="floatingPassword">ยืนยันรหัสผ่าน</label>
      </div>
  
     
      <button class="btn btn-primary w-100 py-2" type="submit">ลงทะเบียน</button>
      <p class="mt-5 mb-3 text-body-secondary">มีบัญชีอยู่แล้ว ? <a href="{{ route('login') }}">เข้าสู่ระบบ</a></p>
    </form>
  </main> --}}











{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
