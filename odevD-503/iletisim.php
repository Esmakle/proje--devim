<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $isimSoyisim = $_POST['isimSoyisim'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];
    $cinsiyet = $_POST['cinsiyet'];
    $seciniz = $_POST['seciniz'];
    $metin = $_POST['metin'];
    $kabul = isset($_POST['kabul']) ? 'Kabul edildi' : 'Kabul edilmedi';

    // E-posta gönderimi
    $to = "koleazman@gmail.com"; // Alıcı e-posta adresi
    $subject = "İletişim Formu Gönderisi";
    $message = "İsim - Soyisim: $isimSoyisim\n";
    $message .= "Email: $email\n";
    $message .= "Şifre: $sifre\n";
    $message .= "Cinsiyet: $cinsiyet\n";
    $message .= "Web Sitesi Bulunma Durumu: $seciniz\n";
    $message .= "Dilek ve Şikayet: $metin\n";
    $message .= "Okudum kabul ediyorum: $kabul\n";

    // E-postayı gönder
    mail($to, $subject, $message);


}
?>