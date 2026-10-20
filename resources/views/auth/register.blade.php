<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h1>Create an account</h1>
    @if ($errors->any())
        <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
    @endif
    @if (session('success')) <p>{{ session('success') }}</p> @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <label>Full name</label>
        <input name="name" type="text" value="{{ old('name') }}" required><br><br>

        <label>Email</label>
        <input name="email" type="email" value="{{ old('email') }}" required><br><br>

        <label>Password</label>
        <input name="password" type="password" minlength="8" required><br><br>

        <label>Confirm password</label>
        <input name="password_confirmation" type="password" minlength="8" required><br><br>

        <button type="submit">Register</button>
    </form>
    <a href="{{ route('login') }}">Already have an account?</a>
</body>
</html>