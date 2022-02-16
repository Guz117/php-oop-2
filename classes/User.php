<?php
require_once __DIR__ . "/Card.php";

class User
{
    protected $name;
    protected $last_name;
    protected $eta;
    protected $mail;
    protected $card;

    public function  __construct($name, $last_name, $eta, $mail, $card)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->eta = $eta;
        $this->mail = $mail;
        $this->setCard($card);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of eta
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set the value of eta
     *
     * @return  self
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */
    public function setCard(Card $card)
    {
        $this->card = $card;

        return $this;
    }
}
