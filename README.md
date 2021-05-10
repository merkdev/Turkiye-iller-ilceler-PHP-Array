# Turkiye-iller-ilceler-PHP-Array
Türkiye'nin tüm illeri ve ilçelerinin hiyerarşik yapıdaki array dizisidir. PSR-4 standartlarına uygundur.

## Tests
[![Github Actions for PHP with PHPUnit Tests](https://github.com/merkdev/Turkiye-iller-ilceler-PHP-Array/actions/workflows/ci.yml/badge.svg)](https://github.com/merkdev/Turkiye-iller-ilceler-PHP-Array/actions/workflows/ci.yml)

## Eski sürüm
Eski sürüm için lütfen `legacy` branchine bakın.

## Kullanım
1. `composer require merkdev/turkiye-iller-ilceler-php-array` ile kütüphaneyi projenize ekleyin.
2. `include 'vendor/autoload.php';` autoload ile kütüphanelerinizi dahil edin.
3. `$turkey = new \MerkDev\Cities\Turkey;` olarak sınıfı oluşturun.

## Açıklama
```php
  // Tüm şehirleri ve ilçelerini getir
  $all_cities = $turkey->select('*')->get();
  var_export($all_cities);

  // Sadece yazılı şehirleri ve ilçelerini getir
  $cities = $turkey->select(['Antalya', 'İstanbul'])->get();
  var_export($cities);
```

## Sorunlar
[Github Issues](https://github.com/merkdev/Turkiye-iller-ilceler-PHP-Array/issues)

## Önizleme
![Screenshot](https://i.hizliresim.com/BAN5EL.png)