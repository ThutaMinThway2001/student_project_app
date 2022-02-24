@extends('Layout.AuthLayout')
@section('content')
    <div class="login-div">
        <div class="logo"></div>
        <div class="title">Login Form</div>
        <div class="sub-title">Haru Student Management</div>
        <form action="{{route('userLogin')}}" method="POST">
            @csrf
            <div class="fields">
                @if (Session('error'))
                    <div class="alert alert-danger">
                        {{Session('error')}}
                    </div>
                @endif
                <div class="email"><input type="email" class="user-input" placeholder="email" name="email" /></div>
                @error('email')
                    <p style="color: red">Email field required!!!</p>
                @enderror
                <div class="password"><input type="password" class="pass-input" placeholder="password" name="password"/></div>
                @error('password')
                    <p style="color: red">Password field required!!!</p>
                @enderror
            </div>
                <button class="signin-button">Login</button>
                <div class="link">
                <a href="#">Forgot password?</a> <span style="color: darkcyan;">or</span> <a href="#">Sign up</a>
            </div>
        </form>
    </div>
    
@endsection
