<?php

namespace BBMParser\Model;

class Price
{
    private $type;
    private $status;
    private $amount;
    private $currency;
    private $taxRateCode;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTaxRateCode()
    {
        return $this->taxRateCode;
    }

    /**
     * @param string $taxRateCode
     */
    public function setTaxRateCode($taxRateCode): void
    {
        $this->taxRateCode = $taxRateCode;
    }
}