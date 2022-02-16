<?php


class Card
{
    protected $name_user;
    protected $number;
    protected $cvv;
    protected $expiration_date;
    protected $circuit;

    public function  __construct($name_user, $number, $cvv, $expiration_date, $circuit)
    {
        $this->name_user = $name_user;
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expiratin_date = $expiration_date;
        $this->circuit = $circuit;
    }

    /**
     * Get the value of name_user
     */
    public function getName_user()
    {
        return $this->name_user;
    }

    /**
     * Set the value of name_user
     *
     * @return  self
     */
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiration_date
     */
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */
    public function setExpiration_date($expiration_date)
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    /**
     * Get the value of circuit
     */
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     *
     * @return  self
     */
    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;

        return $this;
    }
}
