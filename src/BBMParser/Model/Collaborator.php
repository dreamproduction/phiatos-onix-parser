<?php 

namespace BBMParser\Model;

class Collaborator extends Contributor
{
    public const ROLE_ID = 'Z99';

    public function __construct()
    {
        parent::setRole(self::ROLE_ID);
    }
}