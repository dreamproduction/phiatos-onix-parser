<?php 

namespace BBMParser\Model;

class Editor extends Contributor
{
    public const ROLE_ID = 'B05';

    public function __construct()
    {
        parent::setRole(self::ROLE_ID);
    }
}