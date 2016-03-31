<?php
/**
 * Class Database.php
 *
 * Class documentation.
 *
 * @author Donny van Walsem <donnehvw@gmail.com>
 * @since 31/03/2016
 * @version 0.1 31/03/2016 Initial class definition.
 */

namespace Donny;


class Database
{

    private $db_config;
    /**
     * @var \PDO $connection
     */
    private $connection;

    public function __construct($db_config)
    {
        $this->db_config = $db_config;
        $this->connect(new Connection());
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function connect(Connection $conn)
    {
        if($connection = $conn->resolveConnection($this->db_config)) {
            $this->connection = $connection;
        }
    }

    /**
     * @param $query
     * @param array ...$params
     * @return \PDOStatement
     */
    public function query($query, $params = null)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    public function paginate()
    {

    }
}