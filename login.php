<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: #0d1b2a; /* Dark Blue background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    .login-card {
      background: #1b263b;
      color: #fff;
      border-radius: 15px;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
      padding: 40px;
      width: 100%;
      max-width: 400px;
    }
    .login-card h2 {
      margin-bottom: 25px;
      font-weight: 600;
      color: #00b4d8; /* Neon blue */
    }
    .form-control {
      background: #0d1b2a;
      border: 1px solid #415a77;
      color: #fff;
    }
    .form-control:focus {
      border-color: #00b4d8;
      box-shadow: none;
    }
    .btn-login {
      background: #00b4d8;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      transition: 0.3s;
    }
    .btn-login:hover {
      background: #0096c7;
    }
    .company-logo {
      font-size: 3rem;
      color: #00b4d8;
    }
    label {
      margin-left: 5px;
    }
  </style>
</head>
<body>

  <div class="login-card text-center">
    <div class="mb-4">
      <span class="company-logo"><i class="fa-brands fa-android"></i></span>
      <h4 class="mt-2">Your Company Logo</h4>
    </div>
    <h2>Log In</h2>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" id="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <div class="d-flex align-items-center mb-3">
        <input type="checkbox" id="remember_me">
        <label for="remember_me" class="text-light">Remember Me!</label>
      </div>
      <button type="submit" class="btn btn-login w-100">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
