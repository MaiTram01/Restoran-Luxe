@extends('users.layout')
@section('title', 'Login')

@section('content')
    @include('error')
    <form action="login" method="POST" class="form">
        @csrf
        @if (session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
        @endif
        <div class="form-inner">
            <h2>User Login</h2>
            <div class="input-wrapper">
                <label for="login-username">Email</label>
                <div class="input-group"><span class="icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4H4A2,2 0 0,0 2,6M20,6L12,11L4,6H20M4,8L12,13L20,8V18H4V8Z"></path>
                    </svg>
                </span>
                <input type="email" name="email" required id="login-username" data-lpignore="true" required />
            </div>
            </div>
            <div class="input-wrapper">
                <label for="login-password">Password</label>
                <div class="input-group"><span class="icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12,2C9.24,2 7,4.24 7,7V10H6C4.9,10 4,10.9 4,12V20C4,21.1 4.9,22 6,22H18C19.1,22 20,21.1 20,20V12C20,10.9 19.1,10 18,10H17V7C17,4.24 14.76,2 12,2M12,4C13.66,4 15,5.34 15,7V10H9V7C9,5.34 10.34,4 12,4M6,12H18V20H6V12M11,14V18H13V14H11Z"></path>
                    </svg>
                </span>
                <input type="password" name="pw" id="login-password" data-lpignore="true" required/>
            </div>
            </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn--primary">Sign in</button>
                    <a class="btn--text" href="#0">Forgot password?</a>
                </div>
        </div>
    </form>
@endsection