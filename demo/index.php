<?php

include './src/Turkey.php';

$turkey = new \MerkDev\Cities\Turkey;

// Tüm şehirleri ve ilçelerini getir
$all_cities = $turkey->select('*')->get();
var_export($all_cities);

// Sadece yazılı şehirleri ve ilçelerini getir
$cities = $turkey->select(['Antalya', 'İstanbul'])->get();
var_export($cities);
