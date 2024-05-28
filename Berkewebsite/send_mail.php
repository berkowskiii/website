<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Hedef e-posta adresi
    $to = "berkepehlivan0@gmail.com"; // Buraya e-postaların gönderileceği adresi yazın
    $subject = "Selamlar herkese ben deneme";

    // E-posta içeriği
    $email_content = "İsim: $fullname\n";
    $email_content .= "E-mail: $email\n";
    $email_content .= "Telefon: $phone\n";
    $email_content .= "Mesaj:\n$message\n";

    // E-posta başlıkları
    $email_headers = "From: $fullname <$email>";

    // E-postayı gönder
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Başarılı mesaj
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        // Hata mesajı
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}




?>