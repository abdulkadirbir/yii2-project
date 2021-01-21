# Mahalle Emlak Nüfus Kontrol Modülü
 
## Hazırlayan :
170201081 - Abdulkadir Bir
### NOT : 
Projede teslim saatinden sonra değişiklik yapılmıştır. Son güncellenme tarihi 21.01.2021 22:50'dir.

## Özet
 Proje mahalleye yeni gelen insanların ikamet ettikleri konutlara göre emlak kontrolünü sağlamak amacıyla oluşturulmuş bir modüldür. Modülde kullanılan "Yii" frameworkunun sağlamış olduğu modüler yapıdan ve diğer imkanlardan faydalanılmıştır. Ayrıntılar "Ekran Görüntüleri" başlığı altında yer almaktadır
 
 Modülde iki yapı vardır:
1. Mahalleye yeni gelen insanları veritabanına ekler, veritabanından siler, o insan hakkındaki verileri günceller.
2. Birinci işlemde yer alan aynı fonksiyonları kiracı olarak gelen insanlar için de gerçekleştirir.

## Eksiklikler
Projede planlanan koşullarda ev sahibi olan insanların ve kiracı olan insanların listelendiği bir tablo da gösterilecekti. Diğer iki tablodan elde edilen verilerle tek bir tabloda tüm mahallede yaşayan insanların konut durumu gösterilecekti. Ayrıca mahallede toplamda kaç insan olduğu da tek tabloda böylece gösterilmiş olacaktı. Fakat bu işlemler yapılamadı.

Bir diğer eksik de veritabanında 3 tabloyu da birbiriyle ilişkilendirme yapabilmekti fakat yukarda belirtilen durumlardan dolayı sadece 2 tablo ilişkilendirildi. Detaylar aşağıda ekran görüntüleriyle gösterilecektir.

## Kurulum Aşamaları 
Modülü bilgisayarınıza kurmadan önce lütfen vagrant kurulumunu, sanal sunucu kurulumunu ve hepsinin ayarlarını başarılı bir şekilde yapınız. Vagrantla sunucunuzun ayağa kalkmış olması gerekmektedir. Ayrıca yii frameworkunu kullanarak `advanced` bir projenizi çalıştırmış olmalısınız. Bu `README.md` bölümünde "vagrant" ve "yii" ile ilgili kurulum aşaması yapılmayacaktır. Çünkü sadece modül anlatılacaktır, öncesinin hazır olduğu varsayılacaktır.

## Gerekli Paketler
Bu bölümde bilgisayarınızda kurulması gereken paketler belirtilmiştir.Lütfen açıklamalara dikkat ediniz :
- `ssh -i .vagrant\machines\ornekMakine\virtualbox\private_key vagrant@advanced` Bu komutu çalıştırmadan önce editörünüzde vagrantı ayağa kaldırmış olmanız gerekmektedir. Sonrasında ise vagrantın kurulu olduğu dizinde çalıştırılmalıdır.
- `cd /var/www/advanced/` Bu komut ile projenizin bulunduğu dizin açılacaktır.
- `composer require --prefer-dist abdulkadirbir/yii2-project "*" ` Bu komut Github'dan gerekli modülü indirecektir. Eğer hata alırsanız aşağıdaki komutu deneyiniz.
- `composer require --prefer-dist abdulkadirbir/yii2-project "dev-main"` Bu komuttan sonra modül projenize `../vendor` klasörü altında otomatik olarak inmiş bulunacaktır.

## Uygulamanın Çalıştırılması
Bu aşamaya kadar geldiyseniz başarılı bir şekilde modülü projenize eklemiş bulunmaktasınız. Bu aşamadan sonra bir kaç config ayarı yapılacaktır. Sırasıyla:
1. `../backend/config/main.php` dosyasına gidiniz.
2. `'modules' => [

        'content' => [
        
           'class' => 'abdulkadirbir\content\Module'
           
        ]
        
     ],
    
    Bu kodları `return` fonksiyonu altında bu şekilde düzeltiniz.  

## ## Firebase Hesap İşlemleri
Uygulamanın düzgün bir şekilde çalışabilmesi için Firebase'de google hesabı oluşturulması gerekmektedir. Halihazırda örnek bir hesaba bağlı olan uygulama kullanıcının dileğine göre başka bir hesapla bağlanabilir. Bunun için gerekli config ayarlamaları yapılmalıdır. Bu işlemler sırasıyla şöyledir:
- Firebase google hesabı açılır. "Konsola Git" bölümünden yeni bir web projesi oluşturulur.
- Daha sonra "Authentication" bölümüne girilir. Burada başlat dedikten sonra ayar bölümünde email kısmını aktif etmek gerekir.
- "Firestore Cloud" bölümü de aynı şekilde aktif edilir.
- "Database" bölümü de aktif edildikten sonra projenin web uygulaması ayarlarına girilir ve orada CDN kodları kopyalanır.
- Uygulamanın içerisinde "firebase.ts" dosyasında var olan config ayarlarıyla yer değiştirilir. Bu işlemleri başarılı bir şekilde yaptıktan sonra uygulamanın bu aşaması tamamlanmış olur.

## Ekran Görüntüleriyle Birlikte Açıklamalar
1.Kullanıcı uygulamayı ilk çalıştırdığında karşısına bu şekilde çıkmaktadır. Kullanıcının hesabı varsa giriş yapabilir. Eğer hesabı yoksa "Kayıt Ol" butonuyla kayıt sayfasına geçebilir.

![](screenshots/Screenshot_12.png)

2.Bu sayfadan kullanıcı firebasede bulunan hesap üzerine kayıt olabilir.

![](screenshots/Screenshot_16.png)

3.Başarılı bir şekilde giriş yapıldıktan sonra kullanıcıya bir alert gösterilmektedir. Daha sonra da "Anasayfa" açılmaktadır.Bu bölümde veritabanındaki satılık araçlar listelenebilir. Kiralık araçlar listelenebilir. Veya yeni bir araç eklenebilir.

![](screenshots/Screenshots_14.png)

4. Satılık araçların listesi.

![](screenshots/Screenshot_13.png)

5.Kiralık araçların listesi

![](screenshots/Screenshot_14.png)

6. Araç Ekleme Sayfası

![](screenshots/Screenshot_15.png)

7. Firebase'de veritabanının görüntüsü

![](screenshots/Screenshot_17.png)


# SONUÇ 
Uygulama Kocaeli Üniversitesi Mobil Programlama dersi için geliştirilmiştir. Projede istenen isterlerin bir çoğunu karşılamakta olup düzgün bir şekilde çalışmaktadır. Bazı sıkıntılı işlevlerden Özet başlığı altında bahsedilmiştir.
