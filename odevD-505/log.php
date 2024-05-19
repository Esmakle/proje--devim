<?php
// Oturumu başlat
session_start();

// Kullanıcı girişi kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre
    $username = "kullanici_adi";
    $password = "sifre";

    // Formdan gelen verileri al
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Kullanıcı adı ve şifre doğrulaması
    if ($input_username == $username && $input_password == $password) {
        // Başarılı giriş, oturum değişkenini ayarla
        $_SESSION['login_user'] = $username;

        // Ana sayfaya yönlendir
        header("location: ana_sayfa.php");
    } else {
        // Geçersiz giriş, hata mesajı göster
        $error = "Geçersiz kullanıcı adı veya şifre!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
</head>
<body>

    <h2>Giriş Yap</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Giriş Yap</button>
        </div>
    </form>

    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

</body>
</html>