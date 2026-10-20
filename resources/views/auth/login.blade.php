<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h1>Sign in</h1>
    @if ($errors->any())
        <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
    @endif
    @if (session('success')) <p>{{ session('success') }}</p> @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <label>Email</label>
        <input name="email" type="email" value="{{ old('email') }}" required><br><br>

        <label>Password</label>
        <input name="password" type="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <a href="{{ route('register') }}">Need an account?</a>
</body>
</html>