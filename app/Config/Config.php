<?php

namespace App\Config;

class Config extends \PDO
{
    private $db;

    public function __construct()
    {
        $this->db = parent::__construct('mysql:host=localhost;dbname=kendaraan','root','root');
    }
}
