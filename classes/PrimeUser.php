<?php
require_once __DIR__ . "/Card.php";

class PrimeUser extends User
{
    protected $tipe;
    protected $discount;

    public function __construct($tipe)
    {
        $this->setTipe($tipe);
    }

    /**
     * Get the value of tipe
     */
    public function getTipe()
    {
        return $this->tipe;
    }

    /**
     * Set the value of tipe
     *
     * @return  self
     */
    public function setTipe($tipe)
    {
        if ($tipe == 'prime') {
            $this->discount = 10;
        }
        $this->tipe = $tipe;

        return $this;
    }

    /**
     * Get the value of sconto
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of sconto
     *
     * @return  self
     */
    public function setDiscount($discount)
    {

        $this->discount = $discount;

        return $this;
    }
}
