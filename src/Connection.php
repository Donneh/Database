<?php
/**
 * Class Connection.php
 *
 * Class documentation.
 *
 * @author Donny van Walsem <donnehvw@gmail.com>
 * @since 31/03/2016
 * @version 0.1 31/03/2016 Initial class definition.
 */

namespace Donny;


class Connection
{

    public function resolveConnection($config)
    {
        $className = $this->resolveClass($config['driver']);

        $connection = new $className;
        return $connection->connect();
    }

    public function resolveClass($driver)
    {
        $name = '\\Donny\\'.$driver.'Connection';
        if(class_exists($name)) {
            return $name;
        }
    }
}