# Halısaham

PHP ve MySQL ile yazılmış **halısaha listeleme ve yönetim sitesi**. Ziyaretçiler şehirlere göre sahaları görüntüler, saha sahipleri üye olup sahalarını ekler, yönetici ise sahaları ve üyeleri onaylar.

![PHP](https://img.shields.io/badge/PHP-8-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-3-7952B3?logo=bootstrap)
![jQuery](https://img.shields.io/badge/jQuery-3-0769AD?logo=jquery)

## Özellikler

**Ziyaretçi**
- Sahaları şehre göre listeleme ve filtreleme
- Hakkımızda ve iletişim sayfaları
- Üye olma ve giriş

**Saha sahibi (üye paneli: `htdocs/users/`)**
- Saha ekleme, güncelleme ve silme
- Profil ayarları

**Yönetici (admin paneli: `htdocs/admin/`)**
- Sahaları ve üyeleri onaylama, durum değiştirme
- Saha ve üye bilgilerini güncelleme

## Kurulum

1. [XAMPP](https://www.apachefriends.org/) (veya benzeri bir PHP + MySQL ortamı) kurun.
2. `htdocs` klasörünün içeriğini sunucunuzun `htdocs` klasörüne kopyalayın.
3. phpMyAdmin'de `halisaha` adlı bir veritabanı oluşturun ve `database/halisaha.sql` dosyasını içe aktarın.
4. Veritabanı kullanıcı adı ve şifrenizi `htdocs/config.php`, `htdocs/conn.php` ve `htdocs/baglan.php` dosyalarında güncelleyin.
5. Tarayıcıda `http://localhost/` adresini açın.

**Örnek hesaplar** (yalnızca yerel deneme için):

| Rol | Kullanıcı adı | Şifre |
|---|---|---|
| Yönetici | `umut` | `123456` |
| Üye | `umutk` | `1234` |

## Proje yapısı

```
├── database/
│   └── halisaha.sql      # Tablolar ve örnek veriler (admin, city, saha, users)
└── htdocs/
    ├── index.php         # Anasayfa
    ├── sahalar.php       # Saha listesi ve şehir filtresi
    ├── uyeol.php         # Üye olma
    ├── GirisPage.php     # Giriş
    ├── users/            # Saha sahibi paneli
    └── admin/            # Yönetici paneli
```

## Notlar

- Saha görselleri (`img/` klasörü) depoda yer almıyor; kendi görsellerinizi `htdocs/img/` altına ekleyebilirsiniz.
- Bu proje bir eğitim projesidir. Şifreler veritabanında düz metin olarak tutulduğu için gerçek bir sunucuda bu haliyle kullanılmamalıdır.

## Lisans

[CC0 1.0](LICENSE) — serbestçe kullanılabilir.
