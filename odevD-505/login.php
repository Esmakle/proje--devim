<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body> 
  <header>
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-end " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <!-- içinde bulunduğu sayfayı belirtir current -->
            <a class="nav-link ml-5" href="index.html" >Hakkımda <span class="sr-only ">(current)</span></a>
            <a class="nav-link ml-5" href="memleket.html">Memleketim</a>
            <a class="nav-link ml-5" href="ilgi.html">ilgi Alanlarım</a>
            <a class="nav-link ml-5" href="özgeçmiş.html">Özgeçmiş</a>
            <a class="nav-link  disabled ml-5" href="#">Login</a>
            <a class="nav-link mr-5  ml-5" href="iletisim.html">İletişim</a>
          </div>
        </div>
      </nav>
    </header>


<div class="wrapper">

<form action="login_post.php" method="POST" >
    <!-- <div class="form"> -->
<h1>Login</h1>
<div class="">
    <?php
        if(isset($_GET['uyari']))
        {
            echo $_GET['uyari'];
        }
    ?>
</div>
<div class="input-box">
    <input type="text" placeholder="Kullanıcı ismi" name="kullanici_adi" required>
    <i class="fa-solid fa-user"></i>
</div>
<div class="input-box">
    <input type="password" name="sifre" placeholder="Şifrenizi Giriniz" required>
    <i class="fa-solid fa-lock"></i>
</div>
<div class=" remember-forgat">
 
    <label > <input type="checkbox"> Beni hatırla</label>
   
</div>

<button  type="submit" class="btn"> GİRİŞ</button>
<div class="register-link">
    <p>Hesabınız yok mu? </p>
    <a href="iletisim.html">Üyelik</a>
<!-- </div> -->
</div>
</form>
</div>


</body>
</html>