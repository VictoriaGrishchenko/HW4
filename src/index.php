<?php
require_once 'autoloader.php';

class Currency
{
    private $isoCode;

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    private function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
        $codeNames = [
            'EUR',
            'USD',
            'UAH',
            'RUB',
        ];

        $isoCode = mb_strlen(3);
        if (!mb_strlen($isoCode)) {
            throw new InvalidArgumentException('Invalid isoCode');
        } elseif (in_array('$isoCode', $codeNames)) {
            throw new InvalidArgumentException('Invalid code  name!');
        }
    }

    public function equal($currencyIso, $currencyIso1)
    {
        if ($currencyIso === $currencyIso1) {
            return true;
        } else {
            return false;
        }
    }

}

$currencyIso = new Currency('USD');
$currencyIso1 = new Currency('EUR');

$currencyIso-> equal('$currencyIso', '$currencyIso1');




class Money
{
private $amount;
private $currency;

    public function __construct($amount, $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }


    public function getAmount()
    {
        return $this->amount;
    }

    private function setAmount($amount)

    {
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    private function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    public function equal(Money $currency)
    {
        if ($this -> currency == $currency) {
            return true;
        } else {
            return false;
        }
    }

    public function add(Money $money)
    {
        if ($this->currency == $money->currency) {
            $amount = $this->amount + $money->amount;
            $currency = $this->getCurrency();
        } else throw new \InvalidArgumentException('Currencies are not same');

        $result = new Money($amount, $currency);

        return $result;
    }
}

$money1 = new Money (100, 'USD');
$money2 = new Money(150, 'USD');

$money1-> equal (new Money(100, 'USD'));
$money2 -> add( new Money(125,'USD'));

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CURRENCY</title>
        <style>
            body {
                background-color: rgb(255, 240, 220);
            }
        </style>
    </head>
    <body>
    <h3>  <p align="center"> <?= $money2 ->getAmount() ?>, <?= $money2 ->getCurrency() ?></p></h3>
    </body>
    </html>