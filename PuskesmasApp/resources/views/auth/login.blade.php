<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <style>
    body {
      background-color: #f8f9fc;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .login-heading {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 4px;
    }

    .login-btn {
      border-radius: 4px;
    }

    .logo {
      max-width: 100px;
      margin: 0 auto;
      display: block;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="login-container">
      <img src="{{ asset('img/puskesmas.png') }}" alt="Logo" class="logo">
      <h2 class="login-heading">Login</h2>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email"
            placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" required autocomplete="current-password"
            placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block login-btn">Login</button>
      </form>
      <div class="text-center mt-3">
        <a href="{{ route('register') }}">Create an Account</a>
      </div>
    </div>
  </div>
</body>

</html>
