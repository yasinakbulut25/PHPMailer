## PHP Mailer Nedir?

PHPMailer, PHP ile mail gönderme amacıyla kullanılan en popüler açık kaynak kodlu PHP kütüphanelerinden birisidir. İlk olarak **2001** yılında kullanıma sunulmuş ve o zamandan beri PHP geliştiricileri tarafından mail gönderimi için sık sık kullanılmaktadır.


## PHP Mailer Kurulumu ve Kullanımı

PHPMailer kullanımı için **SMTP** destekli bir mail sunucusuna kayıtlı mail hesabı gerekiyor. Bu mail sunucusu **gmail**, **hotmail**, **yandex** gibi çok bilinen mail sunucusu olabileceği gibi **sitenizin kendine ait** mail sunucusu da olabilir.  
  
Başlangıçta en bilinen mail sunucularına ait **SMTP** ayarları nelerdir görelim. Bu ayarlar doğrultusunda **PHPMailer** sınıfını kurabilir ve mail gönderebiliriz.

## Gmail SMTP Mail Gönderme Ayarları

PHP **Gmail** mail gönderme işlemi sırasında bilgileri sorunsuz girdiğiniz halde program içerisinde ′**Username and Password not accepted**′ şeklinde bir hata ortaya çıkarsa, bu muhtemelen hesabınızın **güvenlik** ayarlarıyla ilgilidir. Bu sorunu yaşıyorsanız aşağıdaki çözüm adımlarını takip edebilirsiniz.  
  
İlk olarak gmail hesabınız ile **google**'da oturum açın. Daha sonra sağ üst kısımda bulunan profilinize tıklayarak "**Google hesabınızı yönetin**" seçeneğine tıklayın. Açılan sayfada sol tarafta bulunan menüden "**Güvenlik**" seçeneğine tıklayarak gmail hesabınızın **güvenlik** ayarlarına erişin. Daha sonra aşağı kısımlarda bulunan "**Daha az güvenli uygulama erişimi**" kısmından "**Erişimi aç**" seçeneğine tıklayın.

![](https://kodsatirim.com/images/myupload/kb6145.png)

PHP gmail mail gönderme işlemi esnasında PHPMailer sınıfında ″**SMTPSecure**″ özelliğini ′**tls**′ olarak seçerseniz ″**Port**″ özelliğine ′**587**′, ′**ssl**′ olarak seçerseniz ′**465**′ olarak belirtmeniz gerekir.

-   **SMTP Sunucusu:**  smtp.gmail.com
-   **SMTP Port:**  587/465
-   **SMTP Veri Gizliliği:**  tls/ssl

## Yandex SMTP Mail Gönderme Ayarları

All your files and folders are presented as a tree in the file explorer. You can switch from one to another by clicking a file in the tree.

## Rename a file

PHP yandex mail gönderme işlemi aşağıda verilen bilgileri kullanacağız. Burada dikkat edilmesi gereken nokta, gmail **SMTP** ayarları içerisinde yapılan durumda olduğu gibi PHP yandex mail gönderme işlemi sırasında PHPMailer sınıfında ″**SMTPSecure**″ özelliğini ′**tls**′ olarak seçilmesi halinde ″**Port**″ özelliğine ′**587**′, ′**ssl**′ olarak seçilirse de ′**465**′ olarak belirtmeniz gerektiğidir.

-   **SMTP Sunucusu:**  smtp.yandex.com
-   **SMTP Port:**  587/465
-   **SMTP Veri Gizliliği:**  tls/ssl

## Hotmail SMTP Mail Gönderme Ayarları

-   **SMTP Sunucusu:**  smtp.live.com
-   **SMTP Port:**  587
-   **SMTP Veri Gizliliği:**  tls

## Domaininize Ait SMTP Destekli Sunucu Ayarları

Hosting ve domain hizmeti aldığınızda genel olarak hosting şirketinin domaininize özel size vereceği bir e-**posta** hizmeti bulunur. Web sunucunuzun **e-posta ayarları** kısmında bu yapılandırma ayarlarına ait mail sunucu bilgileriniz, e-posta alımı için gerekli bağlantılar olan **IMAP**, **POP3** portları ve **SMTP** portları belirtilir. Bu bilgileri kullanarak kendi sitenize ait mail adresinizi **SMTP** mail gönderimi için kullanabilirsiniz.

## PHP Mailer Kurulum

PHPMailer kurulumu için gerekli dosyaları güncel haliyle [github](https://github.com/PHPMailer/PHPMailer) üzerinden indirebilirsiniz.


İndirilen dosyaların ne işe yaradığından ve gereklilik durumlarından bahsedelim;

-   İndirilen dosyada ′**src**′ klasörünün içerisindeki ′**PHPMailer.php**′ ve '**SMTP.php**' dosyaları mail gönderimi için şart. Projeye bu dosyaların dahil edilmesi gerekiyor.
-   Exception.php′ dosyası, mail gönderimi sırasında oluşabilecek hataların sebebini görmek için gereklidir. Mail gönderimi sırasında bir sorun çıkmadığı sürece bunu projenize dahil etmenize gerek yok. Ancak hata varsa ve fatal error vermesi halinde proğram tamamen duracağı için bunu da projenize eklemenizde fayda var.
-  İndirilen dosyada aynı zamanda ′**language**′ klasörü bulunmakta. Bu klasörde bulunan dosyalar ile hata mesajlarının hangi dilde görüntülenmesi gerektiğini seçebilirsiniz. Projeye ′**Exception.php**′ dosyasını eklemiyorsanız projede bu klasörü tanımlamanıza gerek yok.
-   Diğer dosyalar isteğe bağlıdır. Bu yüzden PHP ile mail gönderme amacıyla bu dosyaları projeye dahil etmeniz şart değil


> PHPMailer kullanımının ve kodlarının detaylı açıklamasına   [kodsatirim.com](https://kodsatirim.com/Konular/php-mailer-kullanimi-ile-smtp-mail-gonderme) sitesinden ulaşabilirsiniz. 
