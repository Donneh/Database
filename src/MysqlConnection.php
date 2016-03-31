<?php
/**
 * Class MysqlConnection.php
 *
 * Class documentation.
 *
 * @author Donny van Walsem <donnehvw@gmail.com>
 * @since 31/03/2016
 * @version 0.1 31/03/2016 Initial class definition.
 */

namespace Donny;


class MysqlConnection implements ConnectionInterface
{

    public function connect()
    {
        return new \PDO('mysql:host=localhost;dbname=example', 'root', 'lollol33');
    }
}