<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<form action="{{ route('test.login.postLogin') }}" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="{{ config('login.shudanti.username_field_name') }}" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="{{ config('login.shudanti.password_field_name') }}" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
</body>
</html>