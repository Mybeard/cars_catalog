<?php

/*
 * This file is part of the "default-project" package.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

class Car extends AbstractCar
{
    private $package;

    public function __construct($brand, $year, $model, $vin, $package)
    {
        parent::__construct($brand, $year, $model, $vin);
        $this->package = $package;
    }


    public function getPackage()
    {
        return $this->package;
    }

    public function setPackage($package)
    {
        $this->package = $package;
    }
}
