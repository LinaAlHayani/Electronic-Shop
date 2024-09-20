@extends('layouts.app')

@section('content')
<div class="overlay"></div>
<div class="login-container">
    <h2>تسجيل الدخول</h2>
    <form action="/login" method="POST">
        @csrf
        <div class="input-group">
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="كلمة المرور" required>
        </div>
        <button type="submit" class="btn-login">تسجيل الدخول</button>
    </form>
    <div class="forgot-password">
        <a href="/forgot-password">نسيت كلمة المرور؟</a>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: url('https://example.com/login-background.jpg') no-repeat center center/cover;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
    }
    .login-container {
        position: relative;
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 40px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        width: 300px;
    }
    h2 {
        margin-bottom: 30px;
        font-size: 28px;
        color: #fff;
    }
    .input-group {
        margin-bottom: 20px;
    }
    .input-group input {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 30px;
        font-size: 16px;
        background-color: rgba(255, 255, 255, 0.8);
        color: #333;
    }
    .input-group input:focus {
        outline: none;
        background-color: rgba(255, 255, 255, 1);
    }
    .btn-login {
        padding: 15px 30px;
        background-color: #ff5733;
        color: white;
        border: none;
        border-radius: 30px;
        font-size: 18px;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-login:hover {
        background-color: #e04b28;
    }
    .forgot-password {
        margin-top: 20px;
        font-size: 14px;
        color: #ccc;
    }
    .forgot-password a {
        color: #ff5733;
        text-decoration: none;
    }
    .forgot-password a:hover {
        text-decoration: underline;
    }
</style>
@endpush
