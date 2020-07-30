<?php

namespace BBMParser\Model;

abstract class Measure
{

    private $type;
    private $measurement;
    private $measurementUnitCode;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    /**
     * @param mixed $measurement
     */
    public function setMeasurement($measurement): void
    {
        $this->measurement = $measurement;
    }

    /**
     * @return mixed
     */
    public function getMeasurementUnitCode()
    {
        return $this->measurementUnitCode;
    }

    /**
     * @param mixed $measurementUnitCode
     */
    public function setMeasurementUnitCode($measurementUnitCode): void
    {
        $this->measurementUnitCode = $measurementUnitCode;
    }

}