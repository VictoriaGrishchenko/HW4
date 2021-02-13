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

        $isoCode = strlen(3);
        if (!strlen($isoCode)) {
            throw new InvalidArgumentException('Invalid isoCode');
        } elseif (in_array('$isoCode', $codeNames)) {
            throw new InvalidArgumentException('Invalid code  name!');
        }
    }

    public function equal($currencyIso, $currencyIso1)
    {
        if ($currencyIso === $currencyIso1){
            return true;
        }

        else {
            return false;
        }
    }
$currencyIso = new Currency('USD');
$currencyIso1 = new Currency('EUR');

$currencyIso = equal($currencyIso, $currencyIso1);
echo $currencyIso;



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

}

$money1 = new Money(100, 'USD');
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
    <h3>  <p align="center"> <?= $currencyIso ->getIsoCode() ?></p></h3>
    <h3>  <p align="center"> <?= $money1 ->getAmount() ?>, <?= $money1 ->getCurrency() ?></p></h3>
    </body>
    </html>