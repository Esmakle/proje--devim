<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-end " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <!-- içinde bulunduğu sayfayı belirtir current -->
            <a class="nav-link ml-5 " href="index.html" >Hakkımda <span class="sr-only ">(current)</span></a>
            <a class="nav-link ml-5" href="memleket.html">Memleketim</a>
            <a class="nav-link ml-5" href="ilgi.html">ilgi Alanlarım</a>
            <a class="nav-link ml-5" href="özgeçmiş.html">Özgeçmiş</a>
            <a class="nav-link ml-5" href="login.php">Login</a>
            <a class="nav-link mr-5  ml-5 disabled" href="iletisim.html">İletişim</a>
          </div>
        </div>
    </nav>
    <?php
$kullanici_adi= $_POST['kullanici_adi'];
$sifre= $_POST['sifre'];
if ( filter_var($kullanici_adi, FILTER_VALIDATE_EMAIL) )
{
	if($kullanici_adi=='G231210079@sakarya.edu.tr')
	{
		if($sifre==='G231210079')
		{
			echo "Hoşgeldiniz ". $kullanici_adi;
		}
		elseif($sifre=='')
		{
			header('Location: login.php?uyari=sifre_bos');
		}
		else
		{
			header('Location: login.php?uyari=sifre_yanlis');
		}
		
	}
	elseif($kullanici_adi=='')
	{
		header('Location: login.php?uyari=kullanici_adi_bos');
	}
	else
	{
		header('Location: login.php?uyari=kullanici_adi_yanlis');
	}
}
else
{
	header('Location: login.php?uyari=eposta_degil');
}
?>
</body>
</html>