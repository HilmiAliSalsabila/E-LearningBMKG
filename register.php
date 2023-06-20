<!DOCTYPE html>
<?php
require_once 'config.php';

if (isset($_POST['register'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = connect();

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "Email sudah terdaftar. Silakan gunakan email lain.";
  } else {
    $query = "INSERT INTO user (nama, alamat, email, password) VALUES ('$nama', '$alamat', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
      echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location.href = 'login.php';</script>";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
}
?>
<html>

<head>
  <title>Register</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./Register/css/style.css" />
  <link href="img/Logo_BMKG.png" rel="shotcut icon">
</head>

<body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.html">BMKG</a></div>
      <div class="menu">
        <ul>
          <li><a href="login.php" class="tbl-biru">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Register</h1>
    <form action="register.php" method="POST">
      <input type="text" placeholder="Nama" name="nama" required />
      <input type="text" placeholder="Alamat" name="alamat" required />
      <input type="email" placeholder="Email Address" name="email" required />
      <input type="password" placeholder="Password" name="password" required />
      <input type="password" placeholder="Confirm Password" name="confirmPassword" required />
      <button type="submit" name="register">Register</button>
    </form>
  </div>

  <script>
    <?php
    if (isset($_POST['register'])) {
      echo "alert('Registrasi berhasil. Silakan login.'); window.location.href = 'login.php';";
    }
    ?>
  </script>
</body>

</html>