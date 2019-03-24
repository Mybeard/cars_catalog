<?php


namespace App;

class AbstractCar
{
    private $brand;
    private $year;
    private $model;
    private $vin;

    /**
     * AbstractCar constructor.
     * @param $brand
     * @param $year
     * @param $model
     * @param $vin
     */
    public function __construct($brand, $year, $model, $vin)
    {
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->vin = $vin;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getVin()
    {
        return $this->vin;
    }

    public function setVin($vin)
    {
        $this->vin = $vin;
    }




}