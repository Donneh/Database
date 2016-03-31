<?php
namespace Donny;

interface ConnectionInterface {

    public function connect($host, $username, $password, $database);

}