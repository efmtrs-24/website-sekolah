<x-guest-layout>

<style>

body{
margin:0;
padding:0;
font-family:'Poppins',sans-serif;

background:
linear-gradient(
rgba(0,0,0,.5),
rgba(0,0,0,.5)),
url('{{ asset("images/profile.jpeg") }}');

background-size:cover;
background-position:center;
height:100vh;
}

.login-wrapper{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.login-card{
width:400px;
background:white;
padding:40px;
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,.3);
text-align:center;
}

.login-logo{
width:90px;
height:90px;
object-fit:cover;
margin-bottom:15px;
}

.login-title{
font-size:30px;
font-weight:700;
color:#006b2d;
margin-bottom:5px;
}

.login-subtitle{
color:#666;
font-size:14px;
margin-bottom:30px;
}

.form-group{
margin-bottom:20px;
text-align:left;
}

.form-group label{
display:block;
margin-bottom:8px;
font-weight:600;
color:#333;
}

.form-control{
width:100%;
padding:14px;
border:1px solid #ccc;
border-radius:10px;
outline:none;
font-size:15px;
box-sizing:border-box;
transition:.3s;
}

.form-control:focus{
border-color:#006b2d;
box-shadow:0 0 5px rgba(0,107,45,.4);
}

/* PASSWORD */

.password-wrapper{
position:relative;
}

.password-wrapper .form-control{
padding-right:55px;
}

.toggle-password{

position:absolute;

right:18px;

top:50%;

transform:translateY(-50%);

cursor:pointer;

font-size:20px;

color:#777;

user-select:none;

}

.toggle-password:hover{
color:#006b2d;
}

/* REMEMBER */

.login-options{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
}

.remember{
display:flex;
align-items:center;
gap:8px;
}

.remember input{
width:16px;
height:16px;
cursor:pointer;
}

.remember label{
margin:0;
font-size:14px;
color:#555;
cursor:pointer;
}

.forgot-link{
text-decoration:none;
color:#006b2d;
font-size:14px;
font-weight:500;
}

.forgot-link:hover{
text-decoration:underline;
}

/* BUTTON */

.btn-login{

width:100%;

background:#006b2d;

color:white;

border:none;

padding:14px;

border-radius:10px;

font-size:16px;

font-weight:700;

cursor:pointer;

transition:.3s;

}

.btn-login:hover{
background:#004d20;
}

/* ERROR */

.error-message{

background:#ffebee;

color:#c62828;

padding:12px;

border-radius:10px;

margin-bottom:20px;

font-size:14px;

font-weight:600;

border:1px solid #ef9a9a;

}

</style>

<div class="login-wrapper">

<div class="login-card">

<img
src="{{ asset('images/logo.jpeg') }}"
class="login-logo">

<div class="login-title">

Login Admin

</div>

<div class="login-subtitle">

MTs Nurul Yaqin

</div>

@if ($errors->any())

<div class="error-message">

Email atau kata sandi salah!

</div>

@endif

<form
method="POST"
action="{{ route('login') }}">

@csrf

<!-- EMAIL -->

<div class="form-group">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Masukkan email"
value="{{ old('email') }}"
required>

</div>

<!-- PASSWORD -->

<div class="form-group">

<label>Password</label>

<div class="password-wrapper">

<input
id="password"
type="password"
name="password"
class="form-control"
placeholder="Masukkan password"
required>

<span
class="toggle-password"
onclick="togglePassword()">

👁️

</span>

</div>

</div>

<!-- REMEMBER -->

<div class="login-options">

<div class="remember">

<input
type="checkbox"
name="remember"
id="remember">

<label for="remember">

Remember me

</label>

</div>

@if (Route::has('password.request'))

<a
href="{{ route('password.request') }}"
class="forgot-link">

Forgot Password?

</a>

@endif

</div>

<!-- BUTTON -->

<button
type="submit"
class="btn-login">

LOGIN ADMIN

</button>

</form>

</div>

</div>

<script>

function togglePassword(){

let input =
document.getElementById("password");

if(input.type==="password"){

input.type="text";

}else{

input.type="password";

}

}

</script>

</x-guest-layout>