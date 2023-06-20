<?php
session_start();

$_SESSION['nama'];
$_SESSION['alamat'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Style -->
    <title>Profil Saya</title>
    <link rel="stylesheet" type="text/css" href="./Profil/css/style.css" />
    <link href="img/Logo_BMKG.png" rel="shotcut icon">
</head>

<body>
    <div class="container">
        <h1>Profil Saya</h1>
        <div class="profile-picture">
            <img src="foto_profil.png" alt="Foto Profil" />
        </div>
        <form action="/profile.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo $_SESSION['nama']; ?>" />
            </div>
            <div class="form-group">
                <label for="ttl">Alamat</label>
                <input type="text" id="ttl" name="ttl" placeholder="Masukkan tempat tanggal lahir" value="<?php echo $_SESSION['alamat']; ?>" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" value="<?php echo $_SESSION['email']; ?>" />
            </div>
            <div class="form-group">
                <label for="phone">Nomor HP</label>
                <input type="text" id="phone" name="telepon" placeholder="Masukkan nomor HP" value="<?php echo $profileData['telepon']; ?>" />
            </div>
            <div class="button-container">
                <button type="submit" id="edit-btn">Save</button>
            </div>
        </form>
    </div>
    <script src="profil/js/script.js"></script>
</body>

</html>