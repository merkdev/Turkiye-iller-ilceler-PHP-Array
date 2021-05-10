<?php

namespace MerkDev\Cities;

use PHPUnit\Framework\TestCase;

final class TurkeyTest extends TestCase
{

  private $turkey;
  private $testing_cities_names = ['İstanbul', 'Antalya', 'Ankara'];
  private $testing_cities_count = 3;
  private $all_cities_count = 81;

  public function setUp(): void
  {
    $this->turkey = new Turkey();
  }

  public function testSelectAll_ReturnCheckCount(): void
  {
    $all_cities_count = count($this->turkey->select('*')->get());
    $this->assertEquals($all_cities_count, $this->all_cities_count);
  }

  public function testSelectMultiple_ReturnCheckCount(): void
  {
    $this->assertCount($this->testing_cities_count, $this->turkey->select($this->testing_cities_names)->get());
  }

  public function testSelectMultiple_ReturnCheckNames(): void
  {
    $city_names = array_map(function ($city) {
      return $city['name'];
    }, $this->turkey->select($this->testing_cities_names)->get());
    $this->assertEquals($this->testing_cities_names, $city_names);
  }

  public function testSelectMultiple_ReturnCheckDistricts(): void
  {
    $districts = array_map(function ($city) {
      return $city['districts'];
    }, $this->turkey->select($this->testing_cities_names)->get());
    $this->assertGreaterThanOrEqual(1, $districts);
  }
}
