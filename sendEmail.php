<meta charset="UTF-8">
<title>Send Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/ab7283eac0.js" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$locationUrl = "index.php";

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if (isset($_POST)){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $yourEmailAddress = "example@example.com";
    $yourEmailPassword = "email_password";

    $mail = new PHPMailer();

    $mail->isSMTP();
    /** SMTP ile mail gönderimi yapılacağını ve hesap doğrulama işleminin bulunduğunu belirtiyoruz. */
    $mail->SMTPAuth = true;

    /** smtp.gmail.com, smtp.yandex.com, smtp.live.com, mail.domain.com, vb... */
    $mail->Host = "mail.domain.com";

    /** Gönderene ait sunucu, email ve email şifresi bilgileri */
    $mail->Username = $yourEmailAddress;
    $mail->Password = $yourEmailPassword;

    /** SSL için 465, TLS için 587 */
    $mail->Port = 465; //
    $mail->SMTPSecure = "ssl";

    /** Türkçe karakter sorununu önlemek için kullanıyoruz */
    $mail->CharSet= "utf8";

    /** Gönderilen mail içeriğimizde HTML etiketlerinin algılanmasını istiyorsak bunu aktifleştirmemiz gerekir. */
    $mail->isHTML(true);

    /**
     * Maili gönderen hesaba ait mail adresini belirtmek için ′setForm′ fonksiyonunu kullanıyoruz.
     * İlk parametresi mail adresi, ikinci parametresi ise gönderenin isminin belirtildiği kısım.
     * İsim yazılmazsa gönderilecek mailde gönderen kişi olarak mail adresi gösterilir.
     * Bu mail adresi aynı zamanda ′Username′ özelliğine girilen mail adresi ile aynı olmalıdır.
     */
    $mail->setFrom($yourEmailAddress, "Gönderen Kişi");

    /**
     * Gönderilmiş olan maili alan kullanıcı maili yanıtlamak isterse bu maile değil de
     * başka maile yanıt verilmesi isteniyorsa ′addReplyTo′ fonksiyonu kullanılmalı.
     * Bu fonksiyonu birden fazla sayıda kullanabiliriz.
    */
    $mail->addReplyTo('yanitmailadresi@gmail.com', 'Gönderen Kişi');

    /**
     * Maili alacak kişinin mail adresini ′addAddress′ fonksiyonda belirtiyoruz.
     * Maili birden fazla kişiye göndermek istiyorsak farklı mail adresleri içerecek şekilde
     * bu fonksiyonu birden fazla çoğaltarak kullanabiliriz.
    */
    $mail->addAddress("mailialankisi@gmail.com");
    $mail->addAddress("mailialankisi2@gmail.com");

    /**
     * Mailin konusunu ′Subject′ özelliğine, mailin içeriğini ise ′Body′ özelliğine yazabiliriz.
    */
    $mail->Subject = ("$email ($subject)");
    $mail->Body = '
           
            <b>Subject</b> : '.$subject.' <br><br> 
            <b>Name</b> : '.$name.'  <br><br>
            <b>E-Mail</b> : '.$email.' <br><br>
            <b>Message</b> : '.$message.' <br><br>
    ';

    /**
     * Mail içerisinde ek dosya gönderimi yapmak istersek ′addAttachment′ fonksiyonunu kullanmalıyız.
     * Gönderilecek olan dosya aynı sunucu üzerinde olması gerekir.
     * Bu dosyalar maile yüklenir ve alıcıya gönderilir.
     * İlk parametre dosya yolu, ikinci parametre ise istenilen bir dosya ismi.
     * İkinci parametreyi kullanmazsanız dosyanın asıl ismi tanımlanır.
    */
    $mail->addAttachment('path/image.jpg', 'resim_ismi.jpg');
    $mail->addAttachment('path/dosya.rar', 'dosya_ismi.rar');

    /**
     * Maili göndermek için ′send′ fonksiyonunu kullanıyoruz.
     * Mailin gönderilip gönderilmediğini kontrol etmek için bu fonksiyonu bir koşul ifadesi ile sorgulayabiliriz.
    */
    if ($mail->send()){
        echo '
        <div class="alert alert-success m-4" role="alert">
            Mailiniz Başarılı Bir Şekilde Gönderildi
        </div>
';
        header("refresh: 2; url=$locationUrl");
    }else{
        echo '
        <div class="alert alert-danger m-4" role="alert">
            Mailiniz Gönderilirken Bir Hata Oluştu
        </div>
';
        header("refresh: 2; url=$locationUrl");

    }

}
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

