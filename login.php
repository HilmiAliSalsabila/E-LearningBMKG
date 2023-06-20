<!DOCTYPE html>
<?php
require_once 'config.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = connect();

  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Login berhasil, set session nama
    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['alamat'] = $row['alamat'];


    echo "<script>
                  alert('Berhasil Login'); 
                  window.location.href = 'index_after.php';
          </script>";
  } else {
    echo "Email atau password salah.";
  }

  mysqli_close($conn);
}
?>
<html>

<head>
  <title>Login</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./Login/css/style.css" />
  <link href="img/Logo_BMKG.png" rel="shotcut icon">
</head>

<body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.html">BMKG</a></div>
      <div class="menu">
        <ul>
          <li><a href="register.php" class="tbl-biru">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Login</h1>
    <h2>Welcome Back!</h2>
    <form action="login.php" method="post">
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" name="login">Login</button>
    </form>
    <a href="#" id="forgot-password">Forgot Password?</a>
  </div>
</body>

</html>