<?php
require_once 'autoloader.php';
class Currency
{
private $isoCode;
   public function __construct($isoCode)
    {

       $this->isoCode = $isoCode;
    }

    /**
     * @return mixed
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param mixed $isoCode
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }

}

class Money
{
private $amount;
private $currency;

    /**
     * Money constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
}