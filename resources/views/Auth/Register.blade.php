@extends('Layout.AuthLayout')
@section('content')
    <div class="login-div">
        <div class="logo"></div>
        <div class="title">Registration Form</div>
        <div class="sub-title">Haru Student Management</div>
        <form action="{{route('userRegistration')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="fields">
                <div class="username"><input type="username" class="user-input" placeholder="username" name="name"/></div>
                @error('name')
                    <p style="color: red">Username field required!!!</p>
                @enderror
                <div class="email"><input type="email" class="user-input" placeholder="email" name="email"/></div>
                @error('email')
                    <p style="color: red">Email field required!!!</p>
                @enderror
                <div class="file"><input type="file" class="user-input" name="image"></div>
                @error('file')
                    <p style="color: red">File field required!!!</p>
                @enderror
                <div class="password"><input type="password" class="pass-input" placeholder="password" name="password"/></div>
                @error('password')
                    <p style="color: red">Password field required!!!</p>
                @enderror    
            </div>
                <button class="signin-button">Register</button>
                <div class="link">
                <a href="#">Forgot password?</a> <span style="color: darkcyan;">or</span> <a href="#">Sign up</a>
            </div>
        </form>
    </div>
@endsection
