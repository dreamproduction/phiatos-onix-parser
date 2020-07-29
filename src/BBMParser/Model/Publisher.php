<?php

namespace BBMParser\Model;

class Publisher extends Contributor
{
    public const ROLE_ID = 'B01';

    public function __construct()
    {
        parent::setRole(self::ROLE_ID);
    }
}